﻿//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//     Runtime Version:4.0.30319.18408
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

// 
// This source code was auto-generated by Microsoft.VSDesigner, Version 4.0.30319.18408.
// 
#pragma warning disable 1591

namespace SendSmsApp.bd.com.robi.bmpws {
    using System;
    using System.Web.Services;
    using System.Diagnostics;
    using System.Web.Services.Protocols;
    using System.Xml.Serialization;
    using System.ComponentModel;
    
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    [System.Web.Services.WebServiceBindingAttribute(Name="CMPWebServiceSoap", Namespace="http://cmp.aktel.com/")]
    public partial class CMPWebService : System.Web.Services.Protocols.SoapHttpClientProtocol {
        
        private System.Threading.SendOrPostCallback SendTextMultiMessageOperationCompleted;
        
        private System.Threading.SendOrPostCallback SendTextMessageOperationCompleted;
        
        private System.Threading.SendOrPostCallback SendWAPPushOperationCompleted;
        
        private System.Threading.SendOrPostCallback GetMessageStatusOperationCompleted;
        
        private bool useDefaultCredentialsSetExplicitly;
        
        /// <remarks/>
        public CMPWebService() {
            this.Url = global::SendSmsApp.Properties.Settings.Default.SendSmsApp_bd_com_robi_bmpws_CMPWebService;
            if ((this.IsLocalFileSystemWebService(this.Url) == true)) {
                this.UseDefaultCredentials = true;
                this.useDefaultCredentialsSetExplicitly = false;
            }
            else {
                this.useDefaultCredentialsSetExplicitly = true;
            }
        }
        
        public new string Url {
            get {
                return base.Url;
            }
            set {
                if ((((this.IsLocalFileSystemWebService(base.Url) == true) 
                            && (this.useDefaultCredentialsSetExplicitly == false)) 
                            && (this.IsLocalFileSystemWebService(value) == false))) {
                    base.UseDefaultCredentials = false;
                }
                base.Url = value;
            }
        }
        
        public new bool UseDefaultCredentials {
            get {
                return base.UseDefaultCredentials;
            }
            set {
                base.UseDefaultCredentials = value;
                this.useDefaultCredentialsSetExplicitly = true;
            }
        }
        
        /// <remarks/>
        public event SendTextMultiMessageCompletedEventHandler SendTextMultiMessageCompleted;
        
        /// <remarks/>
        public event SendTextMessageCompletedEventHandler SendTextMessageCompleted;
        
        /// <remarks/>
        public event SendWAPPushCompletedEventHandler SendWAPPushCompleted;
        
        /// <remarks/>
        public event GetMessageStatusCompletedEventHandler GetMessageStatusCompleted;
        
        /// <remarks/>
        [System.Web.Services.Protocols.SoapDocumentMethodAttribute("http://cmp.aktel.com/SendTextMultiMessage", RequestNamespace="http://cmp.aktel.com/", ResponseNamespace="http://cmp.aktel.com/", Use=System.Web.Services.Description.SoapBindingUse.Literal, ParameterStyle=System.Web.Services.Protocols.SoapParameterStyle.Wrapped)]
        public ServiceClass[] SendTextMultiMessage(string Username, string Password, string From, string To, string Message) {
            object[] results = this.Invoke("SendTextMultiMessage", new object[] {
                        Username,
                        Password,
                        From,
                        To,
                        Message});
            return ((ServiceClass[])(results[0]));
        }
        
        /// <remarks/>
        public void SendTextMultiMessageAsync(string Username, string Password, string From, string To, string Message) {
            this.SendTextMultiMessageAsync(Username, Password, From, To, Message, null);
        }
        
        /// <remarks/>
        public void SendTextMultiMessageAsync(string Username, string Password, string From, string To, string Message, object userState) {
            if ((this.SendTextMultiMessageOperationCompleted == null)) {
                this.SendTextMultiMessageOperationCompleted = new System.Threading.SendOrPostCallback(this.OnSendTextMultiMessageOperationCompleted);
            }
            this.InvokeAsync("SendTextMultiMessage", new object[] {
                        Username,
                        Password,
                        From,
                        To,
                        Message}, this.SendTextMultiMessageOperationCompleted, userState);
        }
        
        private void OnSendTextMultiMessageOperationCompleted(object arg) {
            if ((this.SendTextMultiMessageCompleted != null)) {
                System.Web.Services.Protocols.InvokeCompletedEventArgs invokeArgs = ((System.Web.Services.Protocols.InvokeCompletedEventArgs)(arg));
                this.SendTextMultiMessageCompleted(this, new SendTextMultiMessageCompletedEventArgs(invokeArgs.Results, invokeArgs.Error, invokeArgs.Cancelled, invokeArgs.UserState));
            }
        }
        
        /// <remarks/>
        [System.Web.Services.Protocols.SoapDocumentMethodAttribute("http://cmp.aktel.com/SendTextMessage", RequestNamespace="http://cmp.aktel.com/", ResponseNamespace="http://cmp.aktel.com/", Use=System.Web.Services.Description.SoapBindingUse.Literal, ParameterStyle=System.Web.Services.Protocols.SoapParameterStyle.Wrapped)]
        public ServiceClass SendTextMessage(string Username, string Password, string From, string To, string Message) {
            object[] results = this.Invoke("SendTextMessage", new object[] {
                        Username,
                        Password,
                        From,
                        To,
                        Message});
            return ((ServiceClass)(results[0]));
        }
        
        /// <remarks/>
        public void SendTextMessageAsync(string Username, string Password, string From, string To, string Message) {
            this.SendTextMessageAsync(Username, Password, From, To, Message, null);
        }
        
        /// <remarks/>
        public void SendTextMessageAsync(string Username, string Password, string From, string To, string Message, object userState) {
            if ((this.SendTextMessageOperationCompleted == null)) {
                this.SendTextMessageOperationCompleted = new System.Threading.SendOrPostCallback(this.OnSendTextMessageOperationCompleted);
            }
            this.InvokeAsync("SendTextMessage", new object[] {
                        Username,
                        Password,
                        From,
                        To,
                        Message}, this.SendTextMessageOperationCompleted, userState);
        }
        
        private void OnSendTextMessageOperationCompleted(object arg) {
            if ((this.SendTextMessageCompleted != null)) {
                System.Web.Services.Protocols.InvokeCompletedEventArgs invokeArgs = ((System.Web.Services.Protocols.InvokeCompletedEventArgs)(arg));
                this.SendTextMessageCompleted(this, new SendTextMessageCompletedEventArgs(invokeArgs.Results, invokeArgs.Error, invokeArgs.Cancelled, invokeArgs.UserState));
            }
        }
        
        /// <remarks/>
        [System.Web.Services.Protocols.SoapDocumentMethodAttribute("http://cmp.aktel.com/SendWAPPush", RequestNamespace="http://cmp.aktel.com/", ResponseNamespace="http://cmp.aktel.com/", Use=System.Web.Services.Description.SoapBindingUse.Literal, ParameterStyle=System.Web.Services.Protocols.SoapParameterStyle.Wrapped)]
        public ServiceClass SendWAPPush(string Username, string Password, string From, string To, string WAPText, string WAPURL) {
            object[] results = this.Invoke("SendWAPPush", new object[] {
                        Username,
                        Password,
                        From,
                        To,
                        WAPText,
                        WAPURL});
            return ((ServiceClass)(results[0]));
        }
        
        /// <remarks/>
        public void SendWAPPushAsync(string Username, string Password, string From, string To, string WAPText, string WAPURL) {
            this.SendWAPPushAsync(Username, Password, From, To, WAPText, WAPURL, null);
        }
        
        /// <remarks/>
        public void SendWAPPushAsync(string Username, string Password, string From, string To, string WAPText, string WAPURL, object userState) {
            if ((this.SendWAPPushOperationCompleted == null)) {
                this.SendWAPPushOperationCompleted = new System.Threading.SendOrPostCallback(this.OnSendWAPPushOperationCompleted);
            }
            this.InvokeAsync("SendWAPPush", new object[] {
                        Username,
                        Password,
                        From,
                        To,
                        WAPText,
                        WAPURL}, this.SendWAPPushOperationCompleted, userState);
        }
        
        private void OnSendWAPPushOperationCompleted(object arg) {
            if ((this.SendWAPPushCompleted != null)) {
                System.Web.Services.Protocols.InvokeCompletedEventArgs invokeArgs = ((System.Web.Services.Protocols.InvokeCompletedEventArgs)(arg));
                this.SendWAPPushCompleted(this, new SendWAPPushCompletedEventArgs(invokeArgs.Results, invokeArgs.Error, invokeArgs.Cancelled, invokeArgs.UserState));
            }
        }
        
        /// <remarks/>
        [System.Web.Services.Protocols.SoapDocumentMethodAttribute("http://cmp.aktel.com/GetMessageStatus", RequestNamespace="http://cmp.aktel.com/", ResponseNamespace="http://cmp.aktel.com/", Use=System.Web.Services.Description.SoapBindingUse.Literal, ParameterStyle=System.Web.Services.Protocols.SoapParameterStyle.Wrapped)]
        public ServiceClass GetMessageStatus(string Username, string Password, int MessageId) {
            object[] results = this.Invoke("GetMessageStatus", new object[] {
                        Username,
                        Password,
                        MessageId});
            return ((ServiceClass)(results[0]));
        }
        
        /// <remarks/>
        public void GetMessageStatusAsync(string Username, string Password, int MessageId) {
            this.GetMessageStatusAsync(Username, Password, MessageId, null);
        }
        
        /// <remarks/>
        public void GetMessageStatusAsync(string Username, string Password, int MessageId, object userState) {
            if ((this.GetMessageStatusOperationCompleted == null)) {
                this.GetMessageStatusOperationCompleted = new System.Threading.SendOrPostCallback(this.OnGetMessageStatusOperationCompleted);
            }
            this.InvokeAsync("GetMessageStatus", new object[] {
                        Username,
                        Password,
                        MessageId}, this.GetMessageStatusOperationCompleted, userState);
        }
        
        private void OnGetMessageStatusOperationCompleted(object arg) {
            if ((this.GetMessageStatusCompleted != null)) {
                System.Web.Services.Protocols.InvokeCompletedEventArgs invokeArgs = ((System.Web.Services.Protocols.InvokeCompletedEventArgs)(arg));
                this.GetMessageStatusCompleted(this, new GetMessageStatusCompletedEventArgs(invokeArgs.Results, invokeArgs.Error, invokeArgs.Cancelled, invokeArgs.UserState));
            }
        }
        
        /// <remarks/>
        public new void CancelAsync(object userState) {
            base.CancelAsync(userState);
        }
        
        private bool IsLocalFileSystemWebService(string url) {
            if (((url == null) 
                        || (url == string.Empty))) {
                return false;
            }
            System.Uri wsUri = new System.Uri(url);
            if (((wsUri.Port >= 1024) 
                        && (string.Compare(wsUri.Host, "localHost", System.StringComparison.OrdinalIgnoreCase) == 0))) {
                return true;
            }
            return false;
        }
    }
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Xml", "4.0.30319.18408")]
    [System.SerializableAttribute()]
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    [System.Xml.Serialization.XmlTypeAttribute(Namespace="http://cmp.aktel.com/")]
    public partial class ServiceClass {
        
        private int messageIdField;
        
        private int statusField;
        
        private string statusTextField;
        
        private int errorCodeField;
        
        private string errorTextField;
        
        private int sMSCountField;
        
        private int currentCreditField;
        
        /// <remarks/>
        public int MessageId {
            get {
                return this.messageIdField;
            }
            set {
                this.messageIdField = value;
            }
        }
        
        /// <remarks/>
        public int Status {
            get {
                return this.statusField;
            }
            set {
                this.statusField = value;
            }
        }
        
        /// <remarks/>
        public string StatusText {
            get {
                return this.statusTextField;
            }
            set {
                this.statusTextField = value;
            }
        }
        
        /// <remarks/>
        public int ErrorCode {
            get {
                return this.errorCodeField;
            }
            set {
                this.errorCodeField = value;
            }
        }
        
        /// <remarks/>
        public string ErrorText {
            get {
                return this.errorTextField;
            }
            set {
                this.errorTextField = value;
            }
        }
        
        /// <remarks/>
        public int SMSCount {
            get {
                return this.sMSCountField;
            }
            set {
                this.sMSCountField = value;
            }
        }
        
        /// <remarks/>
        public int CurrentCredit {
            get {
                return this.currentCreditField;
            }
            set {
                this.currentCreditField = value;
            }
        }
    }
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    public delegate void SendTextMultiMessageCompletedEventHandler(object sender, SendTextMultiMessageCompletedEventArgs e);
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    public partial class SendTextMultiMessageCompletedEventArgs : System.ComponentModel.AsyncCompletedEventArgs {
        
        private object[] results;
        
        internal SendTextMultiMessageCompletedEventArgs(object[] results, System.Exception exception, bool cancelled, object userState) : 
                base(exception, cancelled, userState) {
            this.results = results;
        }
        
        /// <remarks/>
        public ServiceClass[] Result {
            get {
                this.RaiseExceptionIfNecessary();
                return ((ServiceClass[])(this.results[0]));
            }
        }
    }
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    public delegate void SendTextMessageCompletedEventHandler(object sender, SendTextMessageCompletedEventArgs e);
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    public partial class SendTextMessageCompletedEventArgs : System.ComponentModel.AsyncCompletedEventArgs {
        
        private object[] results;
        
        internal SendTextMessageCompletedEventArgs(object[] results, System.Exception exception, bool cancelled, object userState) : 
                base(exception, cancelled, userState) {
            this.results = results;
        }
        
        /// <remarks/>
        public ServiceClass Result {
            get {
                this.RaiseExceptionIfNecessary();
                return ((ServiceClass)(this.results[0]));
            }
        }
    }
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    public delegate void SendWAPPushCompletedEventHandler(object sender, SendWAPPushCompletedEventArgs e);
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    public partial class SendWAPPushCompletedEventArgs : System.ComponentModel.AsyncCompletedEventArgs {
        
        private object[] results;
        
        internal SendWAPPushCompletedEventArgs(object[] results, System.Exception exception, bool cancelled, object userState) : 
                base(exception, cancelled, userState) {
            this.results = results;
        }
        
        /// <remarks/>
        public ServiceClass Result {
            get {
                this.RaiseExceptionIfNecessary();
                return ((ServiceClass)(this.results[0]));
            }
        }
    }
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    public delegate void GetMessageStatusCompletedEventHandler(object sender, GetMessageStatusCompletedEventArgs e);
    
    /// <remarks/>
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Web.Services", "4.0.30319.18408")]
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    public partial class GetMessageStatusCompletedEventArgs : System.ComponentModel.AsyncCompletedEventArgs {
        
        private object[] results;
        
        internal GetMessageStatusCompletedEventArgs(object[] results, System.Exception exception, bool cancelled, object userState) : 
                base(exception, cancelled, userState) {
            this.results = results;
        }
        
        /// <remarks/>
        public ServiceClass Result {
            get {
                this.RaiseExceptionIfNecessary();
                return ((ServiceClass)(this.results[0]));
            }
        }
    }
}

#pragma warning restore 1591