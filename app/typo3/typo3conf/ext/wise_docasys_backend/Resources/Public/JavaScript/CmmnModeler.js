// modeler instance
var cmmnModeler = new CmmnJS({
    container: '#canvas',
    keyboard: {
        bindTo: window
    }
});

/**
* Save diagram contents and print them to the console.
*/
function exportDiagram() {
    cmmnModeler.saveXML({ format: true }, function(err, xml) {
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
* @param {String} cmmnXML diagram to display
*/
function openDiagram(cmmnXML) {
    // import diagram
    cmmnModeler.importXML(cmmnXML, function(err) {
        if (err) {
            return console.error('could not import CMMN 2.0 diagram', err);
        } 

        // access modeler components
        var canvas = cmmnModeler.get('canvas');
        var overlays = cmmnModeler.get('overlays');

        // zoom to fit full viewport
        canvas.zoom('fit-viewport');
    });
}