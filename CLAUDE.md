# CLAUDE Instructions for Messenger

## Role

You are working on a MySQL messaging schema repository.
Your work should improve schema quality, documentation quality, and maintainability.

## Core Files

- `messenger.sql`: Canonical SQL schema.
- `Messenger.mwb`: Visual model source.
- `README.md`: Public project documentation and version history.
- `ARCHITECTURE.md`: Internal schema architecture reference.

## Working Rules

1. Prefer minimal, targeted edits.
2. Do not make broad formatting-only changes.
3. Keep backward compatibility in mind for schema changes.
4. Avoid dropping or renaming columns/tables without migration guidance.

## Mandatory Sync Policy

When `messenger.sql` changes:

- Update `ARCHITECTURE.md` if table structure or relationships changed.
- Update `README.md` sections that describe features/capabilities.
- Update version history with date and change summary if release-impacting.

## SQL Quality Expectations

- Keep naming consistent with existing schema style.
- Ensure indexes support expected query patterns.
- If adding enums, document allowed values.
- If not adding foreign keys, document relational assumptions.

## Response Format Expectations

When reporting completed work:

1. List changed files.
2. Summarize schema-level impact.
3. Note compatibility or migration considerations.
4. Mention whether docs and version history were updated.
