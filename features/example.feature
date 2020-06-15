Feature:
  Scenario:
    Given some step with "string" argument
    And number step with 23

  Scenario:
    Given some step with "number" argument
    Then assert is true
