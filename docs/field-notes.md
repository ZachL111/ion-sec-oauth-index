# Field Notes

I would read this project from the data inward: cases first, implementation second.

The domain cases cover `trust boundary`, `claim drift`, `replay exposure`, and `policy width`. They sit beside the smaller starter fixture so the project has both a compact scoring check and a domain-flavored review check.

`recovery` tells me the happy path still works. `edge` tells me whether the guardrail still has teeth.

The point is not to make the repository bigger. The point is to make the important judgment testable.
