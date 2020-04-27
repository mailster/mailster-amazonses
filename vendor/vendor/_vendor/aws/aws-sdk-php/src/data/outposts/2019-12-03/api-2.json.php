<?php

namespace Mailster;

// This file was auto-generated from sdk-root/src/data/outposts/2019-12-03/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2019-12-03', 'endpointPrefix' => 'outposts', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'Outposts', 'serviceFullName' => 'AWS Outposts', 'serviceId' => 'Outposts', 'signatureVersion' => 'v4', 'signingName' => 'outposts', 'uid' => 'outposts-2019-12-03'], 'operations' => ['CreateOutpost' => ['name' => 'CreateOutpost', 'http' => ['method' => 'POST', 'requestUri' => '/outposts'], 'input' => ['shape' => 'CreateOutpostInput'], 'output' => ['shape' => 'CreateOutpostOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'NotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ServiceQuotaExceededException']]], 'DeleteOutpost' => ['name' => 'DeleteOutpost', 'http' => ['method' => 'DELETE', 'requestUri' => '/outposts/{OutpostId}'], 'input' => ['shape' => 'DeleteOutpostInput'], 'output' => ['shape' => 'DeleteOutpostOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'NotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'DeleteSite' => ['name' => 'DeleteSite', 'http' => ['method' => 'DELETE', 'requestUri' => '/sites/{SiteId}'], 'input' => ['shape' => 'DeleteSiteInput'], 'output' => ['shape' => 'DeleteSiteOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'NotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'GetOutpost' => ['name' => 'GetOutpost', 'http' => ['method' => 'GET', 'requestUri' => '/outposts/{OutpostId}'], 'input' => ['shape' => 'GetOutpostInput'], 'output' => ['shape' => 'GetOutpostOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'NotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'GetOutpostInstanceTypes' => ['name' => 'GetOutpostInstanceTypes', 'http' => ['method' => 'GET', 'requestUri' => '/outposts/{OutpostId}/instanceTypes'], 'input' => ['shape' => 'GetOutpostInstanceTypesInput'], 'output' => ['shape' => 'GetOutpostInstanceTypesOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'NotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'ListOutposts' => ['name' => 'ListOutposts', 'http' => ['method' => 'GET', 'requestUri' => '/outposts'], 'input' => ['shape' => 'ListOutpostsInput'], 'output' => ['shape' => 'ListOutpostsOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'ListSites' => ['name' => 'ListSites', 'http' => ['method' => 'GET', 'requestUri' => '/sites'], 'input' => ['shape' => 'ListSitesInput'], 'output' => ['shape' => 'ListSitesOutput'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 403], 'exception' => \true], 'AccountId' => ['type' => 'string', 'max' => 12, 'min' => 12], 'AvailabilityZone' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '[a-z\\d-]+'], 'AvailabilityZoneId' => ['type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[a-z]+[0-9]+-az[0-9]+'], 'CreateOutpostInput' => ['type' => 'structure', 'required' => ['SiteId'], 'members' => ['Name' => ['shape' => 'OutpostName'], 'Description' => ['shape' => 'OutpostDescription'], 'SiteId' => ['shape' => 'SiteId'], 'AvailabilityZone' => ['shape' => 'AvailabilityZone'], 'AvailabilityZoneId' => ['shape' => 'AvailabilityZoneId']]], 'CreateOutpostOutput' => ['type' => 'structure', 'members' => ['Outpost' => ['shape' => 'Outpost']]], 'DeleteOutpostInput' => ['type' => 'structure', 'required' => ['OutpostId'], 'members' => ['OutpostId' => ['shape' => 'OutpostId', 'location' => 'uri', 'locationName' => 'OutpostId']]], 'DeleteOutpostOutput' => ['type' => 'structure', 'members' => []], 'DeleteSiteInput' => ['type' => 'structure', 'required' => ['SiteId'], 'members' => ['SiteId' => ['shape' => 'SiteId', 'location' => 'uri', 'locationName' => 'SiteId']]], 'DeleteSiteOutput' => ['type' => 'structure', 'members' => []], 'ErrorMessage' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '^[\\S \\n]+$'], 'GetOutpostInput' => ['type' => 'structure', 'required' => ['OutpostId'], 'members' => ['OutpostId' => ['shape' => 'OutpostId', 'location' => 'uri', 'locationName' => 'OutpostId']]], 'GetOutpostInstanceTypesInput' => ['type' => 'structure', 'required' => ['OutpostId'], 'members' => ['OutpostId' => ['shape' => 'OutpostId', 'location' => 'uri', 'locationName' => 'OutpostId'], 'NextToken' => ['shape' => 'Token', 'location' => 'querystring', 'locationName' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResults1000', 'location' => 'querystring', 'locationName' => 'MaxResults']]], 'GetOutpostInstanceTypesOutput' => ['type' => 'structure', 'members' => ['InstanceTypes' => ['shape' => 'InstanceTypeListDefinition'], 'NextToken' => ['shape' => 'Token'], 'OutpostId' => ['shape' => 'OutpostId'], 'OutpostArn' => ['shape' => 'OutpostArn']]], 'GetOutpostOutput' => ['type' => 'structure', 'members' => ['Outpost' => ['shape' => 'Outpost']]], 'InstanceType' => ['type' => 'string'], 'InstanceTypeItem' => ['type' => 'structure', 'members' => ['InstanceType' => ['shape' => 'InstanceType']]], 'InstanceTypeListDefinition' => ['type' => 'list', 'member' => ['shape' => 'InstanceTypeItem']], 'InternalServerException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 500], 'exception' => \true], 'LifeCycleStatus' => ['type' => 'string'], 'ListOutpostsInput' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'Token', 'location' => 'querystring', 'locationName' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResults1000', 'location' => 'querystring', 'locationName' => 'MaxResults']]], 'ListOutpostsOutput' => ['type' => 'structure', 'members' => ['Outposts' => ['shape' => 'outpostListDefinition'], 'NextToken' => ['shape' => 'Token']]], 'ListSitesInput' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'Token', 'location' => 'querystring', 'locationName' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResults1000', 'location' => 'querystring', 'locationName' => 'MaxResults']]], 'ListSitesOutput' => ['type' => 'structure', 'members' => ['Sites' => ['shape' => 'siteListDefinition'], 'NextToken' => ['shape' => 'Token']]], 'MaxResults1000' => ['type' => 'integer', 'box' => \true, 'max' => 1000, 'min' => 1], 'NotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'Outpost' => ['type' => 'structure', 'members' => ['OutpostId' => ['shape' => 'OutpostId'], 'OwnerId' => ['shape' => 'OwnerId'], 'OutpostArn' => ['shape' => 'OutpostArn'], 'SiteId' => ['shape' => 'SiteId'], 'Name' => ['shape' => 'OutpostName'], 'Description' => ['shape' => 'OutpostDescription'], 'LifeCycleStatus' => ['shape' => 'LifeCycleStatus'], 'AvailabilityZone' => ['shape' => 'AvailabilityZone'], 'AvailabilityZoneId' => ['shape' => 'AvailabilityZoneId']]], 'OutpostArn' => ['type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^arn:aws([a-z-]+)?:outposts:[a-z\\d-]+:\\d{12}:outpost/op-[a-f0-9]{17}$'], 'OutpostDescription' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '^[\\S ]+$'], 'OutpostId' => ['type' => 'string', 'max' => 180, 'min' => 1, 'pattern' => '^(arn:aws([a-z-]+)?:outposts:[a-z\\d-]+:\\d{12}:outpost/)?op-[a-f0-9]{17}$'], 'OutpostName' => ['type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^[\\S ]+$'], 'OwnerId' => ['type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '\\d{12}'], 'ServiceQuotaExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 402], 'exception' => \true], 'Site' => ['type' => 'structure', 'members' => ['SiteId' => ['shape' => 'SiteId'], 'AccountId' => ['shape' => 'AccountId'], 'Name' => ['shape' => 'SiteName'], 'Description' => ['shape' => 'SiteDescription']]], 'SiteDescription' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '^[\\S ]+$'], 'SiteId' => ['type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => 'os-[a-f0-9]{17}'], 'SiteName' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '^[\\S ]+$'], 'Token' => ['type' => 'string', 'max' => 1005, 'min' => 1, 'pattern' => '.*\\S.*'], 'ValidationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'outpostListDefinition' => ['type' => 'list', 'member' => ['shape' => 'Outpost']], 'siteListDefinition' => ['type' => 'list', 'member' => ['shape' => 'Site']]]];
