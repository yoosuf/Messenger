---
mode: agent
description: Scaffold a Go PostgreSQL chat backend with WebSocket support using this repository schema.
---

Build a backend service from this repository's schema with these requirements:

- Stack: Go, PostgreSQL, WebSocket (Gorilla or nhooyr), pgx
- Clean architecture with `cmd`, `internal`, and `migrations`
- Convert `messenger.sql` into PostgreSQL migrations
- Add FK constraints and indexes
- Implement auth and device registration modules
- Implement conversation, participant, message, and attachment APIs
- Implement report and block workflows
- Implement WebSocket hub with conversation rooms, typing events, and message broadcast
- Add config loading, structured logging, and graceful shutdown
- Include Dockerfile and `.env.example`

Output requirements:

1. Show file tree first.
2. Generate production-ready starter code.
3. Include migration scripts.
4. Add local run instructions.
5. Add testing plan (unit + integration).
