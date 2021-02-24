
plugin.tx_dxpswproducts_products {
  view {
    templateRootPaths.0 = EXT:dx_psw_products/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_dxpswproducts_products.view.templateRootPath}
    partialRootPaths.0 = EXT:dx_psw_products/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_dxpswproducts_products.view.partialRootPath}
    layoutRootPaths.0 = EXT:dx_psw_products/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_dxpswproducts_products.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_dxpswproducts_products.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_dxpswproducts_filter {
  view {
    templateRootPaths.0 = EXT:dx_psw_products/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_dxpswproducts_filter.view.templateRootPath}
    partialRootPaths.0 = EXT:dx_psw_products/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_dxpswproducts_filter.view.partialRootPath}
    layoutRootPaths.0 = EXT:dx_psw_products/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_dxpswproducts_filter.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_dxpswproducts_filter.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_dxpswproducts_detailheader {
  view {
    templateRootPaths.0 = EXT:dx_psw_products/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_dxpswproducts_detailheader.view.templateRootPath}
    partialRootPaths.0 = EXT:dx_psw_products/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_dxpswproducts_detailheader.view.partialRootPath}
    layoutRootPaths.0 = EXT:dx_psw_products/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_dxpswproducts_detailheader.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_dxpswproducts_detailheader.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_dxpswproducts_detailform {
  view {
    templateRootPaths.0 = EXT:dx_psw_products/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_dxpswproducts_detailform.view.templateRootPath}
    partialRootPaths.0 = EXT:dx_psw_products/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_dxpswproducts_detailform.view.partialRootPath}
    layoutRootPaths.0 = EXT:dx_psw_products/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_dxpswproducts_detailform.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_dxpswproducts_detailform.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_dxpswproducts._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-dx-psw-products table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-dx-psw-products table th {
        font-weight:bold;
    }

    .tx-dx-psw-products table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
