
plugin.tx_dxuploadnotification_uploadinfo {
  view {
    # cat=plugin.tx_dxuploadnotification_uploadinfo/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:dx_upload_notification/Resources/Private/Templates/
    # cat=plugin.tx_dxuploadnotification_uploadinfo/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:dx_upload_notification/Resources/Private/Partials/
    # cat=plugin.tx_dxuploadnotification_uploadinfo/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:dx_upload_notification/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_dxuploadnotification_uploadinfo//a; type=string; label=Default storage PID
    storagePid =
  }
}
