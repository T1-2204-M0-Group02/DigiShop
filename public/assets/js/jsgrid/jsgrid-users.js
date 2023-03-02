(function($) {
    "use strict";
    $("#batchDelete").jsGrid({
        width: "100%",
        autoload: true,
        confirmDeleting: false,
        paging: true,
        controller: {
            loadData: function() {
                return db.clients;
            }
        },
        fields: [
            { name: "Name", type: "text", width: 100 },
            { name: "Email", width: 100 },
            { name: "Phone", width: 100 },
            { name: "Address", type: "text", width: 100 },
            { name: "Role", type: "text", width: 100 }
        ]
    });
    var selectedItems = [];
    var selectItem = function(item) {
        selectedItems.push(item);
    };
    var unselectItem = function(item) {
        selectedItems = $.grep(selectedItems, function(i) {
            return i !== item;
        });
    };
    var deleteSelectedItems = function() {
        if(!selectedItems.length || !confirm("Are you sure?"))
            return;
        deleteClientsFromDb(selectedItems);
        var $grid = $("#batchDelete");
        $grid.jsGrid("option", "pActionIndex", 1);
        $grid.jsGrid("loadData");
        selectedItems = [];
    };
    var deleteClientsFromDb = function(deletingClients) {
        db.clients = $.map(db.clients, function(client) {
            return ($.inArray(client, deletingClients) > -1) ? null : client;
        });
    };
})(jQuery);
