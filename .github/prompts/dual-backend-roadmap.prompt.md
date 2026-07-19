---
mode: ask
description: Create an implementation roadmap for both Node/Express/TypeScript and Go backends with PostgreSQL and socket support.
---

Create a phased roadmap to build two equivalent chat backend services from this schema:

- Backend A: Node.js + Express + TypeScript + PostgreSQL + Socket.IO
- Backend B: Go + PostgreSQL + WebSocket

Roadmap requirements:

- Define shared API contract and event contract so both services are compatible.
- Define schema migration strategy from MySQL design to PostgreSQL.
- Define milestones with estimates:
  - Foundation
  - Auth and identity
  - Conversations and participants
  - Messaging and attachments
  - Moderation and safety
  - Realtime socket behavior
  - Testing and load validation
  - Deployment and observability
- Include risk list and mitigation.
- Include acceptance criteria per milestone.

Output format:

1. Phase table with timeline.
2. Deliverables per phase.
3. Dependencies and blockers.
4. Final production-readiness checklist.
