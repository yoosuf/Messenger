# Contributing

## Scope

This repository contains a MySQL schema and model files for messaging applications.
Contributions should focus on schema correctness, performance, and documentation quality.

## How to Contribute

1. Fork the repository.
2. Create a feature branch.
3. Make focused changes with clear rationale.
4. Update documentation alongside schema changes.
5. Open a pull request with a concise summary.

## Pull Request Requirements

A good PR should include:

- Problem statement.
- Proposed schema change.
- Backward compatibility impact.
- Migration notes (if needed).
- Updated docs (`README.md`, `ARCHITECTURE.md` when relevant).

## Schema Contribution Guidelines

- Prefer additive changes over destructive changes.
- Add indexes for columns used in filters, joins, and sorting.
- Keep naming style consistent with existing tables.
- Keep data types intentional and aligned with usage.

## Documentation Requirements

If you modify `messenger.sql`, review and update:

- `README.md`
- `ARCHITECTURE.md`

If the change is release-worthy, update the version history in `README.md` with:

- version number
- date (`YYYY-MM-DD`)
- summary
- commit hash (after merge, if applicable)

## Conduct

Please follow the project Code of Conduct in `CODE_OF_CONDUCT.md`.
