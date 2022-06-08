TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger ADD_PATIENT_LOG\nafter insert\non Patient\nfor each row\nbegin\ninsert into log values\n(now(), concat("Inserted new Patient ", cast(new.Patient_Id as char)));\nend' 'CREATE DEFINER=`root`@`localhost` trigger UPD_PATIENT_LOG\nafter update\non Patient\nfor each row\nbegin\ninsert into log values\n(now(), concat("Updated Patient Details ", cast(new.Patient_Id as char)));\nend'
sql_modes=524288 524288
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=165451387115 165451387116
