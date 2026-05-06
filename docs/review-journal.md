# Review Journal

The cases below are the review handles I would use before changing the implementation.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 176, lane `ship`
- `stress`: `claim drift`, score 198, lane `ship`
- `edge`: `replay exposure`, score 160, lane `ship`
- `recovery`: `policy width`, score 206, lane `ship`
- `stale`: `trust boundary`, score 201, lane `ship`

## Note

The repository should be understandable without pretending it is larger than it is.
