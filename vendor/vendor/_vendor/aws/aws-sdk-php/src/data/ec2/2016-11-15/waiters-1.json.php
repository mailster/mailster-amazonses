<?php

namespace Mailster;

// This file was auto-generated from sdk-root/src/data/ec2/2016-11-15/waiters-1.json
return ['waiters' => ['__default__' => ['interval' => 15, 'max_attempts' => 40, 'acceptor_type' => 'output'], '__InstanceState' => ['operation' => 'DescribeInstances', 'acceptor_path' => 'Reservations[].Instances[].State.Name'], '__InstanceStatus' => ['operation' => 'DescribeInstanceStatus', 'success_value' => 'ok'], 'SystemStatusOk' => ['extends' => '__InstanceStatus', 'acceptor_path' => 'InstanceStatuses[].SystemStatus.Status'], 'InstanceStatusOk' => ['extends' => '__InstanceStatus', 'acceptor_path' => 'InstanceStatuses[].InstanceStatus.Status'], 'ImageAvailable' => ['operation' => 'DescribeImages', 'acceptor_path' => 'Images[].State', 'success_value' => 'available', 'failure_value' => ['failed']], 'InstanceRunning' => ['extends' => '__InstanceState', 'success_value' => 'running', 'failure_value' => ['shutting-down', 'terminated', 'stopping']], 'InstanceStopped' => ['extends' => '__InstanceState', 'success_value' => 'stopped', 'failure_value' => ['pending', 'terminated']], 'InstanceTerminated' => ['extends' => '__InstanceState', 'success_value' => 'terminated', 'failure_value' => ['pending', 'stopping']], '__ExportTaskState' => ['operation' => 'DescribeExportTasks', 'acceptor_path' => 'ExportTasks[].State'], 'ExportTaskCompleted' => ['extends' => '__ExportTaskState', 'success_value' => 'completed'], 'ExportTaskCancelled' => ['extends' => '__ExportTaskState', 'success_value' => 'cancelled'], 'SnapshotCompleted' => ['operation' => 'DescribeSnapshots', 'success_path' => 'Snapshots[].State', 'success_value' => 'completed'], 'SubnetAvailable' => ['operation' => 'DescribeSubnets', 'success_path' => 'Subnets[].State', 'success_value' => 'available'], '__VolumeStatus' => ['operation' => 'DescribeVolumes', 'acceptor_path' => 'Volumes[].State'], 'VolumeAvailable' => ['extends' => '__VolumeStatus', 'success_value' => 'available', 'failure_value' => ['deleted']], 'VolumeInUse' => ['extends' => '__VolumeStatus', 'success_value' => 'in-use', 'failure_value' => ['deleted']], 'VolumeDeleted' => ['extends' => '__VolumeStatus', 'success_type' => 'error', 'success_value' => 'InvalidVolume.NotFound'], 'VpcAvailable' => ['operation' => 'DescribeVpcs', 'success_path' => 'Vpcs[].State', 'success_value' => 'available'], '__VpnConnectionState' => ['operation' => 'DescribeVpnConnections', 'acceptor_path' => 'VpnConnections[].State'], 'VpnConnectionAvailable' => ['extends' => '__VpnConnectionState', 'success_value' => 'available', 'failure_value' => ['deleting', 'deleted']], 'VpnConnectionDeleted' => ['extends' => '__VpnConnectionState', 'success_value' => 'deleted', 'failure_value' => ['pending']], 'BundleTaskComplete' => ['operation' => 'DescribeBundleTasks', 'acceptor_path' => 'BundleTasks[].State', 'success_value' => 'complete', 'failure_value' => ['failed']], '__ConversionTaskState' => ['operation' => 'DescribeConversionTasks', 'acceptor_path' => 'ConversionTasks[].State'], 'ConversionTaskCompleted' => ['extends' => '__ConversionTaskState', 'success_value' => 'completed', 'failure_value' => ['cancelled', 'cancelling']], 'ConversionTaskCancelled' => ['extends' => '__ConversionTaskState', 'success_value' => 'cancelled'], '__CustomerGatewayState' => ['operation' => 'DescribeCustomerGateways', 'acceptor_path' => 'CustomerGateways[].State'], 'CustomerGatewayAvailable' => ['extends' => '__CustomerGatewayState', 'success_value' => 'available', 'failure_value' => ['deleted', 'deleting']], 'ConversionTaskDeleted' => ['extends' => '__CustomerGatewayState', 'success_value' => 'deleted'], '__SpotInstanceRequestState' => ['operation' => 'DescribeSpotInstanceRequests', 'acceptor_path' => 'SpotInstanceRequests[].Status.Code'], 'SpotInstanceRequestFulfilled' => ['extends' => '__SpotInstanceRequestState', 'success_value' => 'fulfilled', 'failure_value' => ['schedule-expired', 'canceled-before-fulfillment', 'bad-parameters', 'system-error']]]];
