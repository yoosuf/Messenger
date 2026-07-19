# Messenger Database Architecture

## Overview

Messenger is a MySQL schema for building chat applications with one-to-one and group conversations.
The design separates core messaging data from moderation, device access, and account lifecycle data.

## Schema Scope

Primary schema file: `messenger.sql`

Primary entities:

- users
- contacts
- conversation
- participants
- messages
- attachments
- devices
- access
- block_list
- reports
- deleted_messages
- deleted_conversations
- user_contact
- user_verification
- activities

## Domain Breakdown

### 1. Identity and Profile

- `users`: User account and profile attributes.
- `user_verification`: Verification code data linked to users.

### 2. Contact Graph

- `contacts`: Contact records synced from a client source.
- `user_contact`: Join table linking users to contacts.

### 3. Conversation and Membership

- `conversation`: Conversation metadata (title, creator, channel ID).
- `participants`: Membership of users in conversations and conversation type.

### 4. Messaging

- `messages`: Messages sent in conversations by users.
- `attachments`: Media metadata linked to messages.
- `deleted_messages`: Per-user message deletion tracking.
- `deleted_conversations`: Per-user conversation deletion tracking.

### 5. Moderation and Safety

- `block_list`: Block relationship tracked through participant context.
- `reports`: User report records and resolution status.

### 6. Device and Session Access

- `devices`: User device registration and push token storage.
- `access`: Token-level access data mapped to users and devices.

### 7. Activity Log

- `activities`: Generic activity/event records.

## Logical Relationship Map

```mermaid
erDiagram
    USERS ||--o{ PARTICIPANTS : joins
    CONVERSATION ||--o{ PARTICIPANTS : has
    CONVERSATION ||--o{ MESSAGES : contains
    USERS ||--o{ MESSAGES : sends
    MESSAGES ||--o{ ATTACHMENTS : has
    USERS ||--o{ DEVICES : owns
    DEVICES ||--o{ ACCESS : grants
    USERS ||--o{ ACCESS : authenticates
    USERS ||--o{ USER_CONTACT : links
    CONTACTS ||--o{ USER_CONTACT : links
    USERS ||--o{ DELETED_MESSAGES : marks
    MESSAGES ||--o{ DELETED_MESSAGES : marked
    USERS ||--o{ DELETED_CONVERSATIONS : hides
    CONVERSATION ||--o{ DELETED_CONVERSATIONS : hidden
```

## Important Design Notes

- The schema currently does not define explicit foreign key constraints in DDL, even though many columns are relational references.
- `participants` has a unique index on (`conversation_id`, `users_id`) to prevent duplicate membership rows.
- Some IDs use `AUTO_INCREMENT`, while others are client/generated integers. Keep this behavior consistent unless a migration plan is defined.
- Message type enum currently contains: `text`, `image`, `vedio`, `audio`.

## Recommended Future Hardening

- Add explicit foreign keys with ON DELETE and ON UPDATE behavior.
- Add missing indexes for frequent lookups (conversation_id, sender_id, users_id, created_at).
- Standardize timestamp and ID strategies across all tables.
- Introduce migration scripts and semantic schema versioning.
