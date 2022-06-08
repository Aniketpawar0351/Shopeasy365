TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger ADD_DONOR_LOG\nafter insert\non Donor\nfor each row\nbegin\ninsert into log values\n(now(), concat("Inserted new Donor", cast(new.Donor_Id as char)));\nend' 'CREATE DEFINER=`root`@`localhost` trigger UPD_DONOR_LOG\nafter update\non Donor\nfor each row\nbegin\ninsert into log values\n(now(), concat("Updated Donor Details", cast(new.Donor_Id as char)));\nend' 'CREATE DEFINER=`root`@`localhost` trigger DEL_DONOR_LOG\nafter delete\non Donor\nfor each row\nbegin\ninsert into log values\n(now(), concat("Deleted Donor ", cast(old.Donor_Id as char)));\nend' 'CREATE DEFINER=`root`@`localhost` trigger DEL_PATIENT_LOG\nafter delete\non Donor\nfor each row\nbegin\ninsert into log values\n(now(), concat("Deleted Patient ", cast(old.Donor_Id as char)));\nend'
sql_modes=524288 524288 524288 524288
definers='root@localhost' 'root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
created=165451387107 165451387110 165451387112 165451387118
