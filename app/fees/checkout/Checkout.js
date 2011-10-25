//******************************************************************************
// new.ejs.php
// New Patient Entry Form
// v0.0.1
// 
// Author: Ernest Rodriguez
// Modified: GI Technologies, 2011
// 
// MitosEHR (Electronic Health Records) 2011
//******************************************************************************
Ext.define('Ext.mitos.panel.fees.checkout.Checkout',{
    extend      : 'Ext.mitos.RenderPanel',
    id          : 'panelCheckout',
    pageTitle   : 'Checkout',
    uses        : ['Ext.mitos.CRUDStore', 'Ext.mitos.GridPanel'],
    initComponent: function(){
        var page = this;


        page.pageBody =  [ ];
        page.callParent(arguments);
    } // end of initComponent
}); //ens oNotesPage class