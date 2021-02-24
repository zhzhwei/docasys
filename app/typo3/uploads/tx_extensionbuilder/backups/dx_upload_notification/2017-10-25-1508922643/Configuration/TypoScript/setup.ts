
plugin.tx_dxuploadnotification_uploadinfo {
  view {
    templateRootPaths.0 = EXT:dx_upload_notification/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_dxuploadnotification_uploadinfo.view.templateRootPath}
    partialRootPaths.0 = EXT:dx_upload_notification/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_dxuploadnotification_uploadinfo.view.partialRootPath}
    layoutRootPaths.0 = EXT:dx_upload_notification/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_dxuploadnotification_uploadinfo.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_dxuploadnotification_uploadinfo.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_dxuploadnotification._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-dx-upload-notification table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-dx-upload-notification table th {
        font-weight:bold;
    }

    .tx-dx-upload-notification table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
