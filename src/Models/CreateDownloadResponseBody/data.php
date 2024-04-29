<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\CreateDownloadResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The point in time of the backup set if the task is used to download a backup set at a specific point in time. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1661373070000
     *
     * @var int
     */
    public $backupSetTime;

    /**
     * @description The ID of the full backup set.
     *
     * @example 146005****
     *
     * @var string
     */
    public $bakSetId;

    /**
     * @description The database and table information that is returned if databases and tables are filtered by the download task.
     *
     * @example testdb
     *
     * @var string
     */
    public $dbList;

    /**
     * @description The state of the download task. Valid values:
     *
     *   initializing: The download task was being initialized.
     *   queuing: The download task was queuing.
     *   running: The download task was running.
     *   failed: The download task failed.
     *   finished: The download task was complete.
     *   expired: The download task expired.
     *
     * > If the TargetType parameter is set to URL, the download task expires in three days after the task is complete.
     * @example initializing
     *
     * @var string
     */
    public $downloadStatus;

    /**
     * @description The size of the downloaded data. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $exportDataSize;

    /**
     * @description The format to which the downloaded data is converted.
     *
     * @example CSV
     *
     * @var string
     */
    public $format;

    /**
     * @description The time when the download task was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1661940917570
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The size of the processed data. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $importDataSize;

    /**
     * @description The number of tables that have been downloaded and the total number of tables to be downloaded.
     *
     * > If the task is in the preparation stage, 0/0 is returned.
     * @example 0/0
     *
     * @var string
     */
    public $progress;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description The destination path to which the backup set is downloaded.
     *
     * >  This parameter is returned if the value of **TargetType is OSS**.
     * @example test_db/path
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The type of the destination to which the backup set is downloaded.
     *
     * @example URL
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The ID of the download task.
     *
     * @example dt-qxnsfq5s****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'backupSetTime'  => 'BackupSetTime',
        'bakSetId'       => 'BakSetId',
        'dbList'         => 'DbList',
        'downloadStatus' => 'DownloadStatus',
        'exportDataSize' => 'ExportDataSize',
        'format'         => 'Format',
        'gmtCreate'      => 'GmtCreate',
        'importDataSize' => 'ImportDataSize',
        'progress'       => 'Progress',
        'regionCode'     => 'RegionCode',
        'targetPath'     => 'TargetPath',
        'targetType'     => 'TargetType',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetTime) {
            $res['BackupSetTime'] = $this->backupSetTime;
        }
        if (null !== $this->bakSetId) {
            $res['BakSetId'] = $this->bakSetId;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->downloadStatus) {
            $res['DownloadStatus'] = $this->downloadStatus;
        }
        if (null !== $this->exportDataSize) {
            $res['ExportDataSize'] = $this->exportDataSize;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->importDataSize) {
            $res['ImportDataSize'] = $this->importDataSize;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetTime'])) {
            $model->backupSetTime = $map['BackupSetTime'];
        }
        if (isset($map['BakSetId'])) {
            $model->bakSetId = $map['BakSetId'];
        }
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }
        if (isset($map['DownloadStatus'])) {
            $model->downloadStatus = $map['DownloadStatus'];
        }
        if (isset($map['ExportDataSize'])) {
            $model->exportDataSize = $map['ExportDataSize'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ImportDataSize'])) {
            $model->importDataSize = $map['ImportDataSize'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
