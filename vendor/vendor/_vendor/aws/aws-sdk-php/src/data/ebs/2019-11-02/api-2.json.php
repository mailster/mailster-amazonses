<?php

namespace Mailster;

// This file was auto-generated from sdk-root/src/data/ebs/2019-11-02/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2019-11-02', 'endpointPrefix' => 'ebs', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'Amazon EBS', 'serviceFullName' => 'Amazon Elastic Block Store', 'serviceId' => 'EBS', 'signatureVersion' => 'v4', 'uid' => 'ebs-2019-11-02'], 'operations' => ['GetSnapshotBlock' => ['name' => 'GetSnapshotBlock', 'http' => ['method' => 'GET', 'requestUri' => '/snapshots/{snapshotId}/blocks/{blockIndex}'], 'input' => ['shape' => 'GetSnapshotBlockRequest'], 'output' => ['shape' => 'GetSnapshotBlockResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException']]], 'ListChangedBlocks' => ['name' => 'ListChangedBlocks', 'http' => ['method' => 'GET', 'requestUri' => '/snapshots/{secondSnapshotId}/changedblocks'], 'input' => ['shape' => 'ListChangedBlocksRequest'], 'output' => ['shape' => 'ListChangedBlocksResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException']]], 'ListSnapshotBlocks' => ['name' => 'ListSnapshotBlocks', 'http' => ['method' => 'GET', 'requestUri' => '/snapshots/{snapshotId}/blocks'], 'input' => ['shape' => 'ListSnapshotBlocksRequest'], 'output' => ['shape' => 'ListSnapshotBlocksResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException']]]], 'shapes' => ['Block' => ['type' => 'structure', 'members' => ['BlockIndex' => ['shape' => 'BlockIndex'], 'BlockToken' => ['shape' => 'BlockToken']]], 'BlockData' => ['type' => 'blob', 'sensitive' => \true, 'streaming' => \true], 'BlockIndex' => ['type' => 'integer'], 'BlockSize' => ['type' => 'integer'], 'BlockToken' => ['type' => 'string', 'max' => 256, 'pattern' => '^[A-Za-z0-9+/=]+$'], 'Blocks' => ['type' => 'list', 'member' => ['shape' => 'Block'], 'sensitive' => \true], 'ChangedBlock' => ['type' => 'structure', 'members' => ['BlockIndex' => ['shape' => 'BlockIndex'], 'FirstBlockToken' => ['shape' => 'BlockToken'], 'SecondBlockToken' => ['shape' => 'BlockToken']], 'sensitive' => \true], 'ChangedBlocks' => ['type' => 'list', 'member' => ['shape' => 'ChangedBlock']], 'Checksum' => ['type' => 'string', 'max' => 64], 'ChecksumAlgorithm' => ['type' => 'string', 'enum' => ['SHA256'], 'max' => 32], 'DataLength' => ['type' => 'integer'], 'ErrorMessage' => ['type' => 'string', 'max' => 256], 'GetSnapshotBlockRequest' => ['type' => 'structure', 'required' => ['SnapshotId', 'BlockIndex', 'BlockToken'], 'members' => ['SnapshotId' => ['shape' => 'SnapshotId', 'location' => 'uri', 'locationName' => 'snapshotId'], 'BlockIndex' => ['shape' => 'BlockIndex', 'location' => 'uri', 'locationName' => 'blockIndex'], 'BlockToken' => ['shape' => 'BlockToken', 'location' => 'querystring', 'locationName' => 'blockToken']]], 'GetSnapshotBlockResponse' => ['type' => 'structure', 'members' => ['DataLength' => ['shape' => 'DataLength', 'location' => 'header', 'locationName' => 'x-amz-Data-Length'], 'BlockData' => ['shape' => 'BlockData'], 'Checksum' => ['shape' => 'Checksum', 'location' => 'header', 'locationName' => 'x-amz-Checksum'], 'ChecksumAlgorithm' => ['shape' => 'ChecksumAlgorithm', 'location' => 'header', 'locationName' => 'x-amz-Checksum-Algorithm']], 'payload' => 'BlockData'], 'ListChangedBlocksRequest' => ['type' => 'structure', 'required' => ['SecondSnapshotId'], 'members' => ['FirstSnapshotId' => ['shape' => 'SnapshotId', 'location' => 'querystring', 'locationName' => 'firstSnapshotId'], 'SecondSnapshotId' => ['shape' => 'SnapshotId', 'location' => 'uri', 'locationName' => 'secondSnapshotId'], 'NextToken' => ['shape' => 'PageToken', 'location' => 'querystring', 'locationName' => 'pageToken'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'StartingBlockIndex' => ['shape' => 'BlockIndex', 'location' => 'querystring', 'locationName' => 'startingBlockIndex']]], 'ListChangedBlocksResponse' => ['type' => 'structure', 'members' => ['ChangedBlocks' => ['shape' => 'ChangedBlocks'], 'ExpiryTime' => ['shape' => 'TimeStamp'], 'VolumeSize' => ['shape' => 'VolumeSize'], 'BlockSize' => ['shape' => 'BlockSize'], 'NextToken' => ['shape' => 'PageToken']]], 'ListSnapshotBlocksRequest' => ['type' => 'structure', 'required' => ['SnapshotId'], 'members' => ['SnapshotId' => ['shape' => 'SnapshotId', 'location' => 'uri', 'locationName' => 'snapshotId'], 'NextToken' => ['shape' => 'PageToken', 'location' => 'querystring', 'locationName' => 'pageToken'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'StartingBlockIndex' => ['shape' => 'BlockIndex', 'location' => 'querystring', 'locationName' => 'startingBlockIndex']]], 'ListSnapshotBlocksResponse' => ['type' => 'structure', 'members' => ['Blocks' => ['shape' => 'Blocks'], 'ExpiryTime' => ['shape' => 'TimeStamp'], 'VolumeSize' => ['shape' => 'VolumeSize'], 'BlockSize' => ['shape' => 'BlockSize'], 'NextToken' => ['shape' => 'PageToken']]], 'MaxResults' => ['type' => 'integer', 'max' => 10000, 'min' => 100], 'PageToken' => ['type' => 'string', 'max' => 256, 'pattern' => '^[A-Za-z0-9+/=]+$'], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'SnapshotId' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^snap-[0-9a-f]+$'], 'TimeStamp' => ['type' => 'timestamp'], 'ValidationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage'], 'Reason' => ['shape' => 'ValidationExceptionReason']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ValidationExceptionReason' => ['type' => 'string', 'enum' => ['INVALID_CUSTOMER_KEY', 'INVALID_PAGE_TOKEN', 'INVALID_BLOCK_TOKEN', 'INVALID_SNAPSHOT_ID', 'UNRELATED_SNAPSHOTS']], 'VolumeSize' => ['type' => 'long']]];
