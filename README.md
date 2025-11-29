# Book-Reviews
A Laravel-based application that allows users to browse, review, and rate books. This project focuses on Eloquent relationships, advanced queries, caching, custom Blade components, and rate limiting. 

A Laravel application for managing and displaying book reviews.
This project demonstrates:

Eloquent Relationships (One-to-Many)

Advanced query techniques

Caching for performance

Custom Blade components

Rate limiting

🚀 Features
🔗 Eloquent (One-to-Many)

A Book can have many Reviews.

A Review belongs to a Book.

🔍 Advanced Querying

Filter books by rating, review count, or popularity.

Use of whereHas(), with(), withCount(), and more.

⚡ Caching

Cached book list queries using Cache::remember().

Cache invalidation on book update or new review.

🧩 Custom Blade Components

Reusable UI components for cleaner templates (e.g., Book Card, Rating Stars).
