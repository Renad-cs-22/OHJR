OHJR: CyberSecurity Escape Room Game 🛡️🔑

[![Academic Project](https://img.shields.io/badge/Academic%20Project-King%20Khalid%20University-blue)](https://www.kku.edu.sa)
[![Methodology](https://img.shields.io/badge/Methodology-Agile%20%2F%20Scrum-orange)]()
[![Tech Stack](https://img.shields.io/badge/Tech%20Stack-React%20%7C%20PHP%20%7C%20MySQL-green)]()

> "OHJR" is a narrative-driven, gamified cybersecurity awareness platform designed to revolutionize how university students and users learn about digital threats. The project name "OHJR" is a creative visionary concept derived from the word "HACK" encrypted using the "Caesar Cipher" mechanism.

---

📖 Table of Contents
- [Overview](#-overview)
- [Key Features](#-key-features)
- [System Architecture & Design](#-system-architecture--design)
- [Technical Stack](#-technical-stack)
- [Underlying Techniques & Algorithms](#-underlying-techniques--algorithms)
- [Database Schema](#-database-schema)
- [Project Management & Orchestration](#-project-management--orchestration)
- [Team & Acknowledgments](#-team--acknowledgments)

---

🌟 Overview

With the rapid acceleration of the digital world, cyber attacks (such as phishing, malware, and social engineering) are rising due to a fundamental lack of public awareness. "OHJR" effectively addresses this issue by blending interactive educational puzzles with immersive storytelling inside a web-based "Escape Room" environment. Players navigate through multiple difficulty rooms, solving time-sensitive security challenges to escape, thereby transforming complex security practices into an engaging experience.

---

🚀 Key Features

Gamified Learning Rooms: 3 distinct interactive rooms corresponding to Easy, Medium, and Hard cybersecurity challenge domains.
Dual-Role Dashboard: Player Interface: Profile management, password reset, level selection, real-time question solving, and live score updates.
Admin/Developer Interface: Global timer monitoring, level/puzzle management (CRUD operations), and full player account controls (view, block, unblock).
Advanced Dual-Scoring System: Built-in dynamic scoring engines that evaluate both precision and cognitive speed.
Responsive Security Foundations: Modular, adaptive UI design supporting desktop and mobile interactions with core focus on encrypted user credentials.

---

🏗️ System Architecture & Design

The platform was built following rigorous object-oriented software engineering guidelines, modeled completely using UML diagrams:
Interaction Models: Context-Flow Diagrams, Level-1 DFDs, Use Case, and Class Diagrams mapping out clear separation of concerns.
Workflows: Activity and Sequence Diagrams engineered for precise state tracking (e.g., Playing a Puzzle, Modifying Levels).
Performance & Reliability: Structured to load pages within 2 seconds, handling up to 500 concurrent players smoothly.

---

🛠️ Technical Stack

Front-End (Client Side)
HTML5 & CSS3: Semantics and highly structured, thematic styling layouts.
JavaScript & React: Driving dynamic interface updates, responsive escape room state rendering, and asynchronous interactions.

Back-End & Storage (Server Side)
PHP: Powering backend real-time business logic, secure API integrations, and session orchestration.
MySQL Server: Relational database management system for secure storage of operational metrics, progress, and administrative assets.

Development Tools
VS Code: Primary Integrated Development Environment (IDE).
Canva: UI/UX blueprint prototyping and asset building.
Crypt Hashing: Standard cryptographic hashing algorithms to ensure player password confidentiality.

---

🧮 Underlying Techniques & Algorithms

The core mechanics of "OHJR" utilize two primary mathematical scoring methodologies to enhance competitiveness and motivation:

1. Weighting Points-Based Algorithm (Accuracy-Focused)
Points are explicitly tied to the question's technical weight and difficulty tier:
$$\text{Score} \mathrel{+}= \text{PointsPerQuestion}(\text{Easy: } 1, \text{Medium: } 2, \text{Hard: } 3)$$

2. Scoring with Time Factor Algorithm (Speed & Strategy)
Rewards both accuracy and cognitive response times. Points are dynamically calculated and deducted utilizing an event-driven threshold loop:
$$\text{Real-time Score} = \text{MaxScore} - (\text{ElapsedTime} \times \text{PenaltyRate})$$
Includes interval-based step penalties and consecutive correct streak bonuses.

---

🗄️ Database Schema

The system relies on a modular relational database design. Core tables include:
`game_developer`: Tracks admin validation credentials.
`player`: Manages registered user profiles tied to developers.
`puzzle_game`: Tracks unique sessions, names, and active timestamps.
`puzzle_level`: Differentiates environment difficulty scopes.
`question` & `answer`: Holds granular challenge prompts and encrypted mapping records.
`score_game`: Maintains the absolute telemetry metrics, time of completion, and total score achieved.

---

📅 Project Management & Orchestration

Methodology: Implemented the "Agile/Scrum Development Framework" over three phases (from Conceptualization to Testing) to maintain high code maintainability, iterative testing, and proactive risk mitigation.
Sprint Orchestration: Leveraged "Asana" to distribute milestones, manage granular deadlines, track hardware/software integration, and maintain technical project requirements seamlessly.
Academic Review: Successfully presented to the King Khalid University academic committee, achieving top recognition for engineering complexity and educational gamification design.

---

👥 Team & Acknowledgments

Lead Creator & Full-Stack Developer:  Renad / GitHub Profile — Originated the cipher-concept, led the implementation pipeline, coordinated timelines, and spearheaded the backend architecture.
Supervised By: MS. Dalia Assiri (King Khalid University — College of Arts and Sciences)
Shoutout to the graduation development squad for bringing this prototype to life!
