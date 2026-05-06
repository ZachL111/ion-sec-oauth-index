# Ion Sec Oauth Index Walkthrough

The fixture is intentionally compact, so the review starts with the cases that pull farthest apart.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 176 | ship |
| stress | claim drift | 198 | ship |
| edge | replay exposure | 160 | ship |
| recovery | policy width | 206 | ship |
| stale | trust boundary | 201 | ship |

Start with `recovery` and `edge`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The next useful expansion would be a malformed fixture around claim drift and policy width.
