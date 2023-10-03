**This application is developed based on the Codeigniter 3.0.6 framework. It is a data management backend that supports the customization and expansion of content models and classification models.**

Supports the creation of data tables (content model/classification model) in the background. The field configuration of the table corresponds to the mysql database field, and the representation corresponds to various HTML tags; based on RBAC permission management, model operation permissions can be controlled at the finest granularity;

There is a bug when running under php7. The session will not start automatically. Modify the entry file index.php and add session_start();

> Note: In `application/core/MY_Model.php`, the user-defined model class should not inherit `MY_Model`, but directly inherit `CI_Model`, because in `MY_Model`, `$this->db->conn_id` has not yet been initialization;
