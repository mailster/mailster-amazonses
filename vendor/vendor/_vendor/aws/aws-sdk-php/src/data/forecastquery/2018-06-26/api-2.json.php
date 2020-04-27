<?php

namespace Mailster;

// This file was auto-generated from sdk-root/src/data/forecastquery/2018-06-26/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-06-26', 'endpointPrefix' => 'forecastquery', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon Forecast Query Service', 'serviceId' => 'forecastquery', 'signatureVersion' => 'v4', 'signingName' => 'forecast', 'targetPrefix' => 'AmazonForecastRuntime', 'uid' => 'forecastquery-2018-06-26'], 'operations' => ['QueryForecast' => ['name' => 'QueryForecast', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'QueryForecastRequest'], 'output' => ['shape' => 'QueryForecastResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceInUseException'], ['shape' => 'InvalidInputException'], ['shape' => 'LimitExceededException'], ['shape' => 'InvalidNextTokenException']]]], 'shapes' => ['Arn' => ['type' => 'string', 'max' => 256, 'pattern' => 'arn:([a-z\\d-]+):forecast:.*:.*:.+'], 'AttributeName' => ['type' => 'string', 'max' => 256, 'pattern' => '^[a-zA-Z0-9\\_\\-]+$'], 'AttributeValue' => ['type' => 'string', 'max' => 256], 'DataPoint' => ['type' => 'structure', 'members' => ['Timestamp' => ['shape' => 'Timestamp'], 'Value' => ['shape' => 'Double']]], 'DateTime' => ['type' => 'string'], 'Double' => ['type' => 'double'], 'ErrorMessage' => ['type' => 'string'], 'Filters' => ['type' => 'map', 'key' => ['shape' => 'AttributeName'], 'value' => ['shape' => 'AttributeValue'], 'max' => 50, 'min' => 1], 'Forecast' => ['type' => 'structure', 'members' => ['Predictions' => ['shape' => 'Predictions']]], 'InvalidInputException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'InvalidNextTokenException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'LimitExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'NextToken' => ['type' => 'string', 'max' => 3000, 'min' => 1], 'Predictions' => ['type' => 'map', 'key' => ['shape' => 'Statistic'], 'value' => ['shape' => 'TimeSeries']], 'QueryForecastRequest' => ['type' => 'structure', 'required' => ['ForecastArn', 'Filters'], 'members' => ['ForecastArn' => ['shape' => 'Arn'], 'StartDate' => ['shape' => 'DateTime'], 'EndDate' => ['shape' => 'DateTime'], 'Filters' => ['shape' => 'Filters'], 'NextToken' => ['shape' => 'NextToken']]], 'QueryForecastResponse' => ['type' => 'structure', 'members' => ['Forecast' => ['shape' => 'Forecast']]], 'ResourceInUseException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'Statistic' => ['type' => 'string', 'max' => 4], 'TimeSeries' => ['type' => 'list', 'member' => ['shape' => 'DataPoint']], 'Timestamp' => ['type' => 'string']]];
