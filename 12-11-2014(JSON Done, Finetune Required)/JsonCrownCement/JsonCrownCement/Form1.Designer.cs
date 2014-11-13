namespace JsonCrownCement
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.showJsonData = new System.Windows.Forms.Label();
            this.showDbStatus = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.startAllButton = new System.Windows.Forms.Button();
            this.stopAllButton = new System.Windows.Forms.Button();
            this.dealerTableButton = new System.Windows.Forms.Button();
            this.corporateTableButton = new System.Windows.Forms.Button();
            this.distributorTableButton = new System.Windows.Forms.Button();
            this.influencerTableButton = new System.Windows.Forms.Button();
            this.retailerTableButton = new System.Windows.Forms.Button();
            this.transactionTableButton = new System.Windows.Forms.Button();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.groupBox2 = new System.Windows.Forms.GroupBox();
            this.showStatusListView = new System.Windows.Forms.ListView();
            this.groupBox1.SuspendLayout();
            this.groupBox2.SuspendLayout();
            this.SuspendLayout();
            // 
            // showJsonData
            // 
            this.showJsonData.AutoSize = true;
            this.showJsonData.Location = new System.Drawing.Point(75, 667);
            this.showJsonData.Name = "showJsonData";
            this.showJsonData.Size = new System.Drawing.Size(91, 13);
            this.showJsonData.TabIndex = 0;
            this.showJsonData.Text = "Show JSON Data";
            // 
            // showDbStatus
            // 
            this.showDbStatus.AutoSize = true;
            this.showDbStatus.Font = new System.Drawing.Font("MS Reference Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.showDbStatus.Location = new System.Drawing.Point(75, 640);
            this.showDbStatus.Name = "showDbStatus";
            this.showDbStatus.Size = new System.Drawing.Size(74, 16);
            this.showDbStatus.TabIndex = 1;
            this.showDbStatus.Text = "DB Status";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("MS Reference Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(271, 25);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(249, 26);
            this.label1.TabIndex = 2;
            this.label1.Text = "Generate JSON Data";
            // 
            // startAllButton
            // 
            this.startAllButton.Location = new System.Drawing.Point(47, 31);
            this.startAllButton.Name = "startAllButton";
            this.startAllButton.Size = new System.Drawing.Size(124, 49);
            this.startAllButton.TabIndex = 3;
            this.startAllButton.Text = "Start All";
            this.startAllButton.UseVisualStyleBackColor = true;
            // 
            // stopAllButton
            // 
            this.stopAllButton.Location = new System.Drawing.Point(313, 31);
            this.stopAllButton.Name = "stopAllButton";
            this.stopAllButton.Size = new System.Drawing.Size(124, 49);
            this.stopAllButton.TabIndex = 4;
            this.stopAllButton.Text = "Stop All";
            this.stopAllButton.UseVisualStyleBackColor = true;
            // 
            // dealerTableButton
            // 
            this.dealerTableButton.Location = new System.Drawing.Point(35, 40);
            this.dealerTableButton.Name = "dealerTableButton";
            this.dealerTableButton.Size = new System.Drawing.Size(178, 23);
            this.dealerTableButton.TabIndex = 5;
            this.dealerTableButton.Text = "Dealer Table";
            this.dealerTableButton.UseVisualStyleBackColor = true;
            // 
            // corporateTableButton
            // 
            this.corporateTableButton.Location = new System.Drawing.Point(285, 40);
            this.corporateTableButton.Name = "corporateTableButton";
            this.corporateTableButton.Size = new System.Drawing.Size(184, 23);
            this.corporateTableButton.TabIndex = 6;
            this.corporateTableButton.Text = "Corporate Table";
            this.corporateTableButton.UseVisualStyleBackColor = true;
            // 
            // distributorTableButton
            // 
            this.distributorTableButton.Location = new System.Drawing.Point(35, 94);
            this.distributorTableButton.Name = "distributorTableButton";
            this.distributorTableButton.Size = new System.Drawing.Size(178, 23);
            this.distributorTableButton.TabIndex = 7;
            this.distributorTableButton.Text = "Distributor Table";
            this.distributorTableButton.UseVisualStyleBackColor = true;
            // 
            // influencerTableButton
            // 
            this.influencerTableButton.Location = new System.Drawing.Point(285, 94);
            this.influencerTableButton.Name = "influencerTableButton";
            this.influencerTableButton.Size = new System.Drawing.Size(184, 23);
            this.influencerTableButton.TabIndex = 8;
            this.influencerTableButton.Text = "Influencer Table";
            this.influencerTableButton.UseVisualStyleBackColor = true;
            // 
            // retailerTableButton
            // 
            this.retailerTableButton.Location = new System.Drawing.Point(35, 153);
            this.retailerTableButton.Name = "retailerTableButton";
            this.retailerTableButton.Size = new System.Drawing.Size(178, 23);
            this.retailerTableButton.TabIndex = 9;
            this.retailerTableButton.Text = "Retailer Table";
            this.retailerTableButton.UseVisualStyleBackColor = true;
            // 
            // transactionTableButton
            // 
            this.transactionTableButton.Location = new System.Drawing.Point(285, 153);
            this.transactionTableButton.Name = "transactionTableButton";
            this.transactionTableButton.Size = new System.Drawing.Size(184, 23);
            this.transactionTableButton.TabIndex = 10;
            this.transactionTableButton.Text = "Transaction Table";
            this.transactionTableButton.UseVisualStyleBackColor = true;
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.startAllButton);
            this.groupBox1.Controls.Add(this.stopAllButton);
            this.groupBox1.Font = new System.Drawing.Font("MS Reference Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.groupBox1.Location = new System.Drawing.Point(162, 67);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(491, 100);
            this.groupBox1.TabIndex = 11;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Click Button To Start Or Stop All JSON Data Services";
            // 
            // groupBox2
            // 
            this.groupBox2.Controls.Add(this.dealerTableButton);
            this.groupBox2.Controls.Add(this.corporateTableButton);
            this.groupBox2.Controls.Add(this.transactionTableButton);
            this.groupBox2.Controls.Add(this.distributorTableButton);
            this.groupBox2.Controls.Add(this.retailerTableButton);
            this.groupBox2.Controls.Add(this.influencerTableButton);
            this.groupBox2.Font = new System.Drawing.Font("MS Reference Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.groupBox2.Location = new System.Drawing.Point(162, 204);
            this.groupBox2.Name = "groupBox2";
            this.groupBox2.Size = new System.Drawing.Size(508, 199);
            this.groupBox2.TabIndex = 12;
            this.groupBox2.TabStop = false;
            this.groupBox2.Text = "Click Button To Create JSON Data For Table";
            // 
            // showStatusListView
            // 
            this.showStatusListView.Location = new System.Drawing.Point(162, 419);
            this.showStatusListView.Name = "showStatusListView";
            this.showStatusListView.Size = new System.Drawing.Size(508, 198);
            this.showStatusListView.TabIndex = 13;
            this.showStatusListView.UseCompatibleStateImageBehavior = false;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(836, 715);
            this.Controls.Add(this.showStatusListView);
            this.Controls.Add(this.groupBox2);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.showDbStatus);
            this.Controls.Add(this.showJsonData);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.groupBox1.ResumeLayout(false);
            this.groupBox2.ResumeLayout(false);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label showJsonData;
        private System.Windows.Forms.Label showDbStatus;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button startAllButton;
        private System.Windows.Forms.Button stopAllButton;
        private System.Windows.Forms.Button dealerTableButton;
        private System.Windows.Forms.Button corporateTableButton;
        private System.Windows.Forms.Button distributorTableButton;
        private System.Windows.Forms.Button influencerTableButton;
        private System.Windows.Forms.Button retailerTableButton;
        private System.Windows.Forms.Button transactionTableButton;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.GroupBox groupBox2;
        private System.Windows.Forms.ListView showStatusListView;
    }
}

