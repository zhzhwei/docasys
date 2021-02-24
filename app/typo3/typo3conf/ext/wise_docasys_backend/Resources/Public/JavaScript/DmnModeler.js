// modeler instance
var dmnModeler = new DmnJS({
    container: '#canvas',
    keyboard: {
        bindTo: window
    }
});

/**
* Save diagram contents and print them to the console.
*/
function exportDiagram() {
    dmnModeler.saveXML({ format: true }, function(err, xml) {
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
* @param {String} dmnXML diagram to display
*/
function openDiagram(dmnXML) {
    // import diagram
    dmnModeler.importXML(dmnXML, function(err) {
        if (err) {
            return console.error('could not import DMN 1.1 diagram', err);
        }

        var activeEditor = dmnModeler.getActiveViewer();

        // access active editor components
        var canvas = activeEditor.get('canvas');

        // zoom to fit full viewport
        canvas.zoom('fit-viewport');
    });
}