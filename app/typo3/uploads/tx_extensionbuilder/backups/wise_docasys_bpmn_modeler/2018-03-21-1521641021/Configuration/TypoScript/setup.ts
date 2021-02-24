
# Module configuration
module.tx_wisedocasysbpmnmodeler_web_wisedocasysbpmnmodelerwisebpmnmodeler {
  persistence {
    storagePid = {$module.tx_wisedocasysbpmnmodeler_wisebpmnmodeler.persistence.storagePid}
  }
  view {
    templateRootPaths.0 = EXT:wise_docasys_bpmn_modeler/Resources/Private/Backend/Templates/
    templateRootPaths.1 = {$module.tx_wisedocasysbpmnmodeler_wisebpmnmodeler.view.templateRootPath}
    partialRootPaths.0 = EXT:wise_docasys_bpmn_modeler/Resources/Private/Backend/Partials/
    partialRootPaths.1 = {$module.tx_wisedocasysbpmnmodeler_wisebpmnmodeler.view.partialRootPath}
    layoutRootPaths.0 = EXT:wise_docasys_bpmn_modeler/Resources/Private/Backend/Layouts/
    layoutRootPaths.1 = {$module.tx_wisedocasysbpmnmodeler_wisebpmnmodeler.view.layoutRootPath}
  }
}
