#!/bin/bash

docker run \
  --rm \
  -v ${PWD}:/local \
  swaggerapi/swagger-codegen-cli generate \
    -l php \
    -i https://eaccountingapi-sandbox.test.vismaonline.com/swagger/docs/v2 \
    -c /local/config.json \
    -o /local
