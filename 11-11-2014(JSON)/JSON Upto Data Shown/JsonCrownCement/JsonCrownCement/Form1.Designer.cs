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
            this.SuspendLayout();
            // 
            // showJsonData
            // 
            this.showJsonData.AutoSize = true;
            this.showJsonData.Location = new System.Drawing.Point(73, 71);
            this.showJsonData.Name = "showJsonData";
            this.showJsonData.Size = new System.Drawing.Size(91, 13);
            this.showJsonData.TabIndex = 0;
            this.showJsonData.Text = "Show JSON Data";
            // 
            // showDbStatus
            // 
            this.showDbStatus.AutoSize = true;
            this.showDbStatus.Location = new System.Drawing.Point(73, 247);
            this.showDbStatus.Name = "showDbStatus";
            this.showDbStatus.Size = new System.Drawing.Size(55, 13);
            this.showDbStatus.TabIndex = 1;
            this.showDbStatus.Text = "DB Status";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(814, 303);
            this.Controls.Add(this.showDbStatus);
            this.Controls.Add(this.showJsonData);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label showJsonData;
        private System.Windows.Forms.Label showDbStatus;
    }
}

