Feature:
  Scenario: test graphql request
    When I request "/"
    Then the response body contain JSON:
    """
    [{"errors":[{"message":"Syntax Error: Unexpected <EOF>","extensions":{"category":"graphql"},"locations":[{"line":1,"column":1}]}]}]
    """

