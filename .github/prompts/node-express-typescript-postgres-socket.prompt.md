---
mode: agent
description: Scaffold a Node.js Express TypeScript PostgreSQL chat backend with Socket.IO using this repository schema.
---

Create a production-oriented backend service from this repository's database model with the following requirements:

- Stack: Node.js, Express, TypeScript, PostgreSQL, Socket.IO
- Use modular architecture by domain (auth, users, conversations, messages, attachments, moderation, devices)
- Add migration files for PostgreSQL based on `messenger.sql`
- Add explicit foreign keys and indexes
- Implement JWT auth and device token registration
- Implement REST endpoints for conversations, participants, messages, attachments, report, and block
- Implement Socket.IO events for join/leave room, send message, typing state, and presence updates
- Add input validation, centralized error handling, and environment config
- Include Dockerfile and `.env.example`
- Include README with run steps and API overview

Output requirements:

1. Provide complete file tree.
2. Generate all core files and code.
3. Include SQL migrations.
4. Include startup commands.
5. Include testing strategy and next improvements.
