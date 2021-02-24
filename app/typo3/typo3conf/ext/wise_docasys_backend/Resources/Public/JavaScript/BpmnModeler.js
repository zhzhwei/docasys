// modeler instance
var bpmnModeler = new BpmnJS({
    container: '#canvas',
    keyboard: {
        bindTo: window
    }
});

/**
* Save diagram contents and print them to the console.
*/
function exportDiagram() {
    return bpmnModeler.saveXML({format: true}, function(err, xml) {
        if (err) {
            alert(err);
            return false;
        } else {
            // Set value base-64-encoded in order to avoid tags (IE > 10)
            $('textarea#modeler-save-value').val(window.btoa(xml));  
            return true;  
        }
    });
}

/**
* Open diagram in our modeler instance.
*
* @param {String} bpmnXML diagram to display
*/
function openDiagram(bpmnXML) {
    // import diagram
    bpmnModeler.importXML(bpmnXML, function(err) {
        if (err) {
            return console.error('could not import BPMN 2.0 diagram', err);
        }

        // access modeler components
        var canvas = bpmnModeler.get('canvas');
        var overlays = bpmnModeler.get('overlays');

        // zoom to fit full viewport
        canvas.zoom('fit-viewport');
    });
}
