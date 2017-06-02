Symfony PHP API for June birthday bash PWA
==========================================

It's a bug not a feature.

**Actions**

1. Authentication

    1. Facebook

    2. Google

    3. Github

    4. Via email

        1. Prompt for username

        2. Prompt for email

        3. Email auth URL to address

        4. User clicks on it and is given a token

2. Post content

    5. Image

        5. File

        6. Description

        7. User tags

        8. Hashtags

    6. Video

        9. File

        10. Description

        11. User tags

        12. Hashtags

    7. Status (text)

        13. Description

        14. User tags

        15. Hashtags

    8. Poll

        16. Question

        17. Options

        18. User tags

        19. Hashtags

3. View content

    9. Gallery mode

    10. Carousel mode

    11. Single mode

    12. Expanded comment mode

    13. Filtered

        20. All

        21. By type

        22. By user

        23. By hashtag

    14. Sorted

        24. New

        25. Old

        26. Top (by upvotes)

        27. Recent activity

4. Comment (hierarchically)

    15. On content

    16. On comments

5. Upvote content (no downvote)

**API**

1. Post

    1. Resource paths

        1. GET /posts

            1. Params

                1. ?type= image|status|video|poll

                2. ?sort= new|old|top|recent-activity

                3. ?hash= {hashtag}

                4. ?user= {username|id}

        2. POST /posts

        3. GET /posts/{id}

        4. PATCH /posts/{id}

        5. DELETE /posts/{id}

2. User

    2. Resource paths

        6. GET /users

        7. POST /users

        8. GET /users/{slug}

        9. PATCH /users/{slug}

        10. PATCH /users/{slug}

        11. DELETE /users/{slug}

3. Comment

    3. Resource paths

        12. GET /posts/{id}/comments

        13. POST /posts/{id}/comments

        14. GET /posts/{id}/comments/{id}

        15. PATCH /posts/{id}/comments/{id}

        16. GET /users/{id}/comments

        17. POST /users/{id}/comments

        18. GET /users/{id}/comments/{id}

        19. PATCH /users/{id}/comments/{id}

4. Upvotes

    4. Resource paths

        20. GET /posts/{id}/votes

        21. POST /posts/{id}/votes

        22. DELETE /posts/{id}/votes/{id}

        23. GET /users/{slug}/votes

        24. GET /users/{slug}/votes

        25. DELETE /users/{slug}/votes/{id}
