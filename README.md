# ion-sec-oauth-index

`ion-sec-oauth-index` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to implement a PHP security tooling project for oauth security rule linting, using safe and unsafe fixtures and remediation hints.

## Why It Exists

The point is to make a small domain rule concrete enough that a reader can change it and immediately see what broke.

## Ion Sec Oauth Index Review Notes

For a quick review, compare `policy width` with `replay exposure` before reading the middle cases.

## Features

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/ion-sec-oauth-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `replay exposure`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Architecture Notes

The implementation keeps the scoring rule plain: reward signal and confidence, preserve slack, penalize drag, then classify the result into a review lane.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Usage

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Tests

The check exercises the source code and the review fixture. `recovery` is the high score at 206; `edge` is the low score at 160.

## Limitations And Roadmap

The repository is intentionally scoped to local checks. I would expand it by adding adversarial fixtures before adding features.
