TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger ADD_TRASACTION_LOG\nafter insert\non Transaction\nfor each row\nbegin\ninsert into log values\n(now(), concat("Added Transaction :: Patient ID : ", cast(new.Patient_ID as char), "; Donor ID : " ,cast(new.Donor_ID as char)));\nend'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=165451387120
