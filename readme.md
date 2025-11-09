# Laravel Technical Test

This repository contains two technical challenges designed to assess Laravel proficiency:

1. A Collections Challenge testing your ability to transform structured data
2. A Model Relationships Challenge testing your understanding of Laravel's relationships

We do not intend for this task to take a long time to complete and is not designed to be an intensive challenge.

This task is not designed to be time intensive, completing the tasks with simplistic, clean and readable code is most important - bonus points for flare.

## Challenge 1: Collections Challenge

This challenge is designed to show your fluency with Laravel's collection API, particularly your ability to transform structured data.

### The Scenario

You're working with a dataset of characters from the world of _Horizon Forbidden West_. Each character has a tribe, skills, weapons, damage stats, and a flag indicating whether they're currently injured.

Your job is to remove the injured characters and return a transformed structure grouped by tribe, summarising key attributes about each group.

The test is complete when the test passes and you're satisfied with the code.

### Your Task

Using the provided `$characters` array:

- Filter out any characters who **are injured**
- Group the remaining characters by **tribe**
- For each tribe, return:
    - A sorted list of **member names**
    - A sorted, unique list of **all skills**
    - A sorted, unique list of **region names**
    - A sorted, unique list of **weapons**
    - A **damage summary**:
        - `min` damage
        - `max` damage
        - `average` damage (rounded to 1 decimal)

Your result must exactly match the `$tribes` array provided in the test.

## Challenge 2: Model Relationships Challenge

This challenge tests your understanding of Laravel's relationships. The task is to implement a subscription system where both users and blogs can be subscribed to.

### The Scenario

You need to create a relationship between:

- A `Subscription` model
- A `User` model
- A `Blog` model

The `Subscription` model should be able to belong to either a `User` or a `Blog` through a relationship.

### Your Task

1. Create the necessary models and migrations
2. Implement the relationships and any missing code
3. Ensure the test passes

The test is complete when the test passes and you're satisfied with the code.

## Getting Started

1. Clone the repo
2. Run `composer install`
3. Run the tests with:
    ```bash
    php artisan test --group collections
    php artisan test --group relations
    php artisan test
    ```

The test suite contains two tests:

- `tests/Unit/CollectionsTest.php` - Tests the collections challenge
- `tests/Feature/ModelRelationsTest.php` - Tests the model relationships challenge

Please submit your completed test either with a Github link or by emailing a zip of your repository to animmo [@] netwatchglobal .com

Good luck !
