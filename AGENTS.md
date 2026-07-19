# AGENTS Guide

## Purpose

This document defines how AI coding agents should work in this repository.
It is intended for Copilot, Claude, and similar agents that modify the schema and docs.

## Repository Focus

- This project is a database design repository.
- Source of truth is `messenger.sql` and `Messenger.mwb`.
- Documentation must stay synchronized with schema updates.

## Agent Objectives

When making changes, agents should prioritize:

1. Schema correctness.
2. Backward compatibility awareness.
3. Clear migration notes.
4. Documentation consistency.

## Required Update Rules

If an agent changes `messenger.sql`, it must also review and update if needed:

- `ARCHITECTURE.md`
- `README.md`
- Version history section in `README.md`

If behavior-impacting changes are made (new table, column rename, data type change), include:

- What changed
- Why it changed
- Potential compatibility impact
- Suggested migration approach

## Schema Change Checklist

Before proposing or applying schema changes:

1. Identify all related tables and relationship paths.
2. Check whether indexes are needed for new access patterns.
3. Validate naming consistency with current schema style.
4. Confirm timestamp strategy (`DATETIME` vs `TIMESTAMP`).
5. Confirm whether foreign keys should be added or deferred.

## Documentation Standards

- Keep docs concise and implementation-oriented.
- Prefer practical examples over generic text.
- Preserve existing project tone and version chronology.

## Commit and Version Guidance

- Use clear, scoped commit messages (example: `schema: add conversation_last_read_at`).
- If the change is release-worthy, append/update an entry in the README version history.
- Include date in `YYYY-MM-DD` format for version history entries.

## Non-Goals

Agents should not:

- Reformat unrelated files.
- Remove historical notes without reason.
- Introduce destructive schema changes without explicit migration notes.
