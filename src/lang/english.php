<?php

    /**
     * English language file for phpPgAdmin.  Use this as a basis
     * for new translations.
     *
     * $Id: english.php,v 1.232 2008/02/23 16:34:33 ioguix Exp $
     */

// Language and character set
    $lang['applang']    = 'English';
    $lang['applocale']  = 'en-US';
    $lang['applangdir'] = 'ltr';

// Welcome
    $lang['strintro']         = 'Welcome to phpPgAdmin.';
    $lang['strppahome']       = 'phpPgAdmin Homepage';
    $lang['strpgsqlhome']     = 'PostgreSQL Homepage';
    $lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
    $lang['strlocaldocs']     = 'PostgreSQL Documentation (local)';
    $lang['strreportbug']     = 'Report a Bug';
    $lang['strviewfaq']       = 'View online FAQ';
    $lang['strviewfaq_url']   = 'http://phppgadmin.sourceforge.net/doku.php?id=faq';

// Basic strings
    $lang['strlogin']                  = 'Login';
    $lang['strloginfailed']            = 'Login failed';
    $lang['strlogindisallowed']        = 'Login disallowed for security reasons.';
    $lang['strserver']                 = 'Server';
    $lang['strservers']                = 'Servers';
    $lang['strgroupservers']           = 'Servers in group "%s"';
    $lang['strallservers']             = 'All servers';
    $lang['strintroduction']           = 'Introduction';
    $lang['strhost']                   = 'Host';
    $lang['strport']                   = 'Port';
    $lang['strlogout']                 = 'Logout';
    $lang['strowner']                  = 'Owner';
    $lang['straction']                 = 'Action';
    $lang['stractions']                = 'Actions';
    $lang['strname']                   = 'Name';
    $lang['strdefinition']             = 'Definition';
    $lang['strproperties']             = 'Properties';
    $lang['strbrowse']                 = 'Browse';
    $lang['strenable']                 = 'Enable';
    $lang['strdisable']                = 'Disable';
    $lang['strdrop']                   = 'Drop';
    $lang['strdropped']                = 'Dropped';
    $lang['strnull']                   = 'Null';
    $lang['strnotnull']                = 'Not Null';
    $lang['strprev']                   = '< Prev';
    $lang['strnext']                   = 'Next >';
    $lang['strfirst']                  = '<< First';
    $lang['strlast']                   = 'Last >>';
    $lang['strfailed']                 = 'Failed';
    $lang['strcreate']                 = 'Create';
    $lang['strcreated']                = 'Created';
    $lang['strcomment']                = 'Comment';
    $lang['strlength']                 = 'Length';
    $lang['strdefault']                = 'Default';
    $lang['stralter']                  = 'Alter';
    $lang['strok']                     = 'OK';
    $lang['strcancel']                 = 'Cancel';
    $lang['strkill']                   = 'Kill';
    $lang['strac']                     = 'Enable AutoComplete';
    $lang['strsave']                   = 'Save';
    $lang['strreset']                  = 'Reset';
    $lang['strrestart']                = 'Restart';
    $lang['strinsert']                 = 'Insert';
    $lang['strselect']                 = 'Select';
    $lang['strdelete']                 = 'Delete';
    $lang['strupdate']                 = 'Update';
    $lang['strreferences']             = 'References';
    $lang['stryes']                    = 'Yes';
    $lang['strno']                     = 'No';
    $lang['strtrue']                   = 'TRUE';
    $lang['strfalse']                  = 'FALSE';
    $lang['stredit']                   = 'Edit';
    $lang['strcolumn']                 = 'Column';
    $lang['strcolumns']                = 'Columns';
    $lang['strrows']                   = 'row(s)';
    $lang['strrowsaff']                = 'row(s) affected.';
    $lang['strobjects']                = 'object(s)';
    $lang['strback']                   = 'Back';
    $lang['strqueryresults']           = 'Query Results';
    $lang['strshow']                   = 'Show';
    $lang['strempty']                  = 'Empty';
    $lang['strlanguage']               = 'Language';
    $lang['strencoding']               = 'Encoding';
    $lang['strvalue']                  = 'Value';
    $lang['strunique']                 = 'Unique';
    $lang['strprimary']                = 'Primary';
    $lang['strexport']                 = 'Export';
    $lang['strimport']                 = 'Import';
    $lang['strallowednulls']           = 'Allowed NULL characters';
    $lang['strbackslashn']             = '\N';
    $lang['stremptystring']            = 'Empty string/field';
    $lang['strsql']                    = 'SQL';
    $lang['stradmin']                  = 'Admin';
    $lang['strvacuum']                 = 'Vacuum';
    $lang['stranalyze']                = 'Analyze';
    $lang['strclusterindex']           = 'Cluster';
    $lang['strclustered']              = 'Clustered?';
    $lang['strreindex']                = 'Reindex';
    $lang['strexecute']                = 'Execute';
    $lang['stradd']                    = 'Add';
    $lang['strevent']                  = 'Event';
    $lang['strwhere']                  = 'Where';
    $lang['strinstead']                = 'Do Instead';
    $lang['strwhen']                   = 'When';
    $lang['strformat']                 = 'Format';
    $lang['strdata']                   = 'Data';
    $lang['strconfirm']                = 'Confirm';
    $lang['strexpression']             = 'Expression';
    $lang['strellipsis']               = '...';
    $lang['strseparator']              = ': ';
    $lang['strexpand']                 = 'Expand';
    $lang['strcollapse']               = 'Collapse';
    $lang['strfind']                   = 'Find';
    $lang['stroptions']                = 'Options';
    $lang['strrefresh']                = 'Refresh';
    $lang['strdownload']               = 'Download';
    $lang['strdownloadgzipped']        = 'Download compressed with gzip';
    $lang['strinfo']                   = 'Info';
    $lang['stroids']                   = 'OIDs';
    $lang['stradvanced']               = 'Advanced';
    $lang['strvariables']              = 'Variables';
    $lang['strprocess']                = 'Process';
    $lang['strprocesses']              = 'Processes';
    $lang['strblocked']                = 'Blocked';
    $lang['strsetting']                = 'Setting';
    $lang['streditsql']                = 'Edit SQL';
    $lang['strruntime']                = 'Total runtime: %s ms';
    $lang['strpaginate']               = 'Paginate results';
    $lang['struploadscript']           = 'or upload an SQL script:';
    $lang['strstarttime']              = 'Start Time';
    $lang['strfile']                   = 'File';
    $lang['strfileimported']           = 'File imported.';
    $lang['strtrycred']                = 'Use these credentials for all servers';
    $lang['strconfdropcred']           =
        'For security reason, disconnecting will destroy your shared login information. Are you sure you want to disconnect ?';
    $lang['stractionsonmultiplelines'] = 'Actions on multiple lines';
    $lang['strselectall']              = 'Select all';
    $lang['strunselectall']            = 'Unselect all';
    $lang['strlocale']                 = 'Locale';
    $lang['strcollation']              = 'Collation';
    $lang['strctype']                  = 'Character Type';
    $lang['strdefaultvalues']          = 'Default values';
    $lang['strnewvalues']              = 'New values';
    $lang['strstart']                  = 'Start';
    $lang['strstop']                   = 'Stop';
    $lang['strgotoppage']              = 'back to top';
    $lang['strtheme']                  = 'Theme';
    $lang['strcluster']                = 'Cluster';

// Admin
    $lang['stradminondatabase'] = 'The following administrative tasks apply on the whole %s database.';
    $lang['stradminontable']    = 'The following administrative tasks apply on the table %s.';

// User-supplied SQL history
    $lang['strhistory']            = 'History';
    $lang['strnohistory']          = 'No history.';
    $lang['strclearhistory']       = 'Clear history';
    $lang['strdelhistory']         = 'Delete from history';
    $lang['strconfdelhistory']     = 'Really remove this request from history?';
    $lang['strconfclearhistory']   = 'Really clear history?';
    $lang['strnodatabaseselected'] = 'Please, select a database.';

// Database sizes
    $lang['strnoaccess'] = 'No Access';
    $lang['strsize']     = 'Size';
    $lang['strbytes']    = 'bytes';
    $lang['strkb']       = 'kB';
    $lang['strmb']       = 'MB';
    $lang['strgb']       = 'GB';
    $lang['strtb']       = 'TB';

// Error handling
    $lang['strnoframes']                      =
        'This application works best with a frames-enabled browser, but can be used without frames by following the link below.';
    $lang['strnoframeslink']                  = 'Use without frames';
    $lang['strbadconfig']                     =
        'Your config.inc.php is out of date. You will need to regenerate it from the new config.inc.php-dist.';
    $lang['strnotloaded']                     =
        'Your PHP installation does not support PostgreSQL. You need to recompile PHP using the --with-pgsql configure option.';
    $lang['strpostgresqlversionnotsupported'] = 'Version of PostgreSQL not supported. Please upgrade to version %s or later.';
    $lang['strbadschema']                     = 'Invalid schema specified.';
    $lang['strbadencoding']                   = 'Failed to set client encoding in database.';
    $lang['strsqlerror']                      = 'SQL error:';
    $lang['strinstatement']                   = 'In statement:';
    $lang['strinvalidparam']                  = 'Invalid script parameters.';
    $lang['strnodata']                        = 'No rows found.';
    $lang['strnoobjects']                     = 'No objects found.';
    $lang['strrownotunique']                  = 'No unique identifier for this row.';
    $lang['strnouploads']                     = 'File uploads are disabled.';
    $lang['strimporterror']                   = 'Import error.';
    $lang['strimporterror-fileformat']        = 'Import error: Failed to automatically determine the file format.';
    $lang['strimporterrorline']               = 'Import error on line %s.';
    $lang['strimporterrorline-badcolumnnum']  = 'Import error on line %s: Line does not possess the correct number of columns.';
    $lang['strimporterror-uploadedfile']      = 'Import error: File could not be uploaded to the server';
    $lang['strcannotdumponwindows']           = 'Dumping of complex table and schema names on Windows is not supported.';
    $lang['strinvalidserverparam']            = 'Attempt to connect with invalid server parameter, possibly someone is trying to hack your system.';
    $lang['strnoserversupplied']              = 'No server supplied!';
    $lang['strbadpgdumppath']                 =
        'Export error: Failed to execute pg_dump (given path in your conf/config.inc.php : %s). Please, fix this path in your configuration and relog.';
    $lang['strbadpgdumpallpath']              =
        'Export error: Failed to execute pg_dumpall (given path in your conf/config.inc.php : %s). Please, fix this path in your configuration and relog.';
    $lang['strconnectionfail']                = 'Can not connect to server.';

// Tables
    $lang['strtable']                     = 'Table';
    $lang['strtables']                    = 'Tables';
    $lang['strshowalltables']             = 'Show all tables';
    $lang['strnotables']                  = 'No tables found.';
    $lang['strnotable']                   = 'No table found.';
    $lang['strcreatetable']               = 'Create table';
    $lang['strcreatetablelike']           = 'Create table like';
    $lang['strcreatetablelikeparent']     = 'Source table';
    $lang['strcreatelikewithdefaults']    = 'INCLUDE DEFAULTS';
    $lang['strcreatelikewithconstraints'] = 'INCLUDE CONSTRAINTS';
    $lang['strcreatelikewithindexes']     = 'INCLUDE INDEXES';
    $lang['strtablename']                 = 'Table name';
    $lang['strtableneedsname']            = 'You must give a name for your table.';
    $lang['strtablelikeneedslike']        = 'You must give a table to copy properties from.';
    $lang['strtableneedsfield']           = 'You must specify at least one field.';
    $lang['strtableneedscols']            = 'You must specify a valid number of columns.';
    $lang['strtablecreated']              = 'Table created.';
    $lang['strtablecreatedbad']           = 'Table creation failed.';
    $lang['strconfdroptable']             = 'Are you sure you want to drop the table "%s"?';
    $lang['strtabledropped']              = 'Table dropped.';
    $lang['strtabledroppedbad']           = 'Table drop failed.';
    $lang['strconfemptytable']            = 'Are you sure you want to empty the table "%s"?';
    $lang['strtableemptied']              = 'Table emptied.';
    $lang['strtableemptiedbad']           = 'Table empty failed.';
    $lang['strinsertrow']                 = 'Insert row';
    $lang['strrowinserted']               = 'Row inserted.';
    $lang['strrowinsertedbad']            = 'Row insert failed.';
    $lang['strnofkref']                   = 'There is no matching value in the foreign key %s.';
    $lang['strrowduplicate']              = 'Row insert failed, attempted to do duplicate insert.';
    $lang['streditrow']                   = 'Edit row';
    $lang['strrowupdated']                = 'Row updated.';
    $lang['strrowupdatedbad']             = 'Row update failed.';
    $lang['strdeleterow']                 = 'Delete Row';
    $lang['strconfdeleterow']             = 'Are you sure you want to delete this row?';
    $lang['strrowdeleted']                = 'Row deleted.';
    $lang['strrowdeletedbad']             = 'Row deletion failed.';
    $lang['strinsertandrepeat']           = 'Insert & Repeat';
    $lang['strnumcols']                   = 'Number of columns';
    $lang['strcolneedsname']              = 'You must specify a name for the column';
    $lang['strselectallfields']           = 'Select all fields';
    $lang['strselectneedscol']            = 'You must show at least one column.';
    $lang['strselectunary']               = 'Unary operators cannot have values.';
    $lang['strcolumnaltered']             = 'Column altered.';
    $lang['strcolumnalteredbad']          = 'Column alteration failed.';
    $lang['strconfdropcolumn']            = 'Are you sure you want to drop column "%s" from table "%s"?';
    $lang['strcolumndropped']             = 'Column dropped.';
    $lang['strcolumndroppedbad']          = 'Column drop failed.';
    $lang['straddcolumn']                 = 'Add column';
    $lang['strcolumnadded']               = 'Column added.';
    $lang['strcolumnaddedbad']            = 'Column add failed.';
    $lang['strcascade']                   = 'CASCADE';
    $lang['strtablealtered']              = 'Table altered.';
    $lang['strtablealteredbad']           = 'Table alteration failed.';
    $lang['strdataonly']                  = 'Data only';
    $lang['strstructureonly']             = 'Structure only';
    $lang['strstructureanddata']          = 'Structure and data';
    $lang['strtabbed']                    = 'Tabbed';
    $lang['strauto']                      = 'Auto';
    $lang['strconfvacuumtable']           = 'Are you sure you want to vacuum "%s"?';
    $lang['strconfanalyzetable']          = 'Are you sure you want to analyze "%s"?';
    $lang['strconfreindextable']          = 'Are you sure you want to reindex "%s"?';
    $lang['strconfclustertable']          = 'Are you sure you want to cluster "%s"?';
    $lang['strestimatedrowcount']         = 'Estimated row count';
    $lang['strspecifytabletoanalyze']     = 'You must specify at least one table to analyze.';
    $lang['strspecifytabletoempty']       = 'You must specify at least one table to empty.';
    $lang['strspecifytabletodrop']        = 'You must specify at least one table to drop.';
    $lang['strspecifytabletovacuum']      = 'You must specify at least one table to vacuum.';
    $lang['strspecifytabletoreindex']     = 'You must specify at least one table to reindex.';
    $lang['strspecifytabletocluster']     = 'You must specify at least one table to cluster.';
    $lang['strnofieldsforinsert']         = 'You cannot insert a row into a table with no column.';

// Columns
    $lang['strcolprop']         = 'Column properties';
    $lang['strnotableprovided'] = 'No table provided!';

// Users
    $lang['struser']               = 'User';
    $lang['strusers']              = 'Users';
    $lang['strusername']           = 'Username';
    $lang['strpassword']           = 'Password';
    $lang['strsuper']              = 'Superuser?';
    $lang['strcreatedb']           = 'Create DB?';
    $lang['strexpires']            = 'Expires';
    $lang['strsessiondefaults']    = 'Session defaults';
    $lang['strnousers']            = 'No users found.';
    $lang['struserupdated']        = 'User updated.';
    $lang['struserupdatedbad']     = 'User update failed.';
    $lang['strshowallusers']       = 'Show all users';
    $lang['strcreateuser']         = 'Create user';
    $lang['struserneedsname']      = 'You must give a name for your user.';
    $lang['strusercreated']        = 'User created.';
    $lang['strusercreatedbad']     = 'Failed to create user.';
    $lang['strconfdropuser']       = 'Are you sure you want to drop the user "%s"?';
    $lang['struserdropped']        = 'User dropped.';
    $lang['struserdroppedbad']     = 'Failed to drop user.';
    $lang['straccount']            = 'Account';
    $lang['strchangepassword']     = 'Change password';
    $lang['strpasswordchanged']    = 'Password changed.';
    $lang['strpasswordchangedbad'] = 'Failed to change password.';
    $lang['strpasswordshort']      = 'Password is too short.';
    $lang['strpasswordconfirm']    = 'Password does not match confirmation.';

// Groups
    $lang['strgroup']            = 'Group';
    $lang['strgroups']           = 'Groups';
    $lang['strgroupgroups']      = 'Groups in group "%s"';
    $lang['strshowallgroups']    = 'Show all groups';
    $lang['strnogroup']          = 'Group not found.';
    $lang['strnogroups']         = 'No groups found.';
    $lang['strcreategroup']      = 'Create group';
    $lang['strgroupneedsname']   = 'You must give a name for your group.';
    $lang['strgroupcreated']     = 'Group created.';
    $lang['strgroupcreatedbad']  = 'Group creation failed.';
    $lang['strconfdropgroup']    = 'Are you sure you want to drop the group "%s"?';
    $lang['strgroupdropped']     = 'Group dropped.';
    $lang['strgroupdroppedbad']  = 'Group drop failed.';
    $lang['strmembers']          = 'Members';
    $lang['strmemberof']         = 'Member of';
    $lang['stradminmembers']     = 'Admin members';
    $lang['straddmember']        = 'Add member';
    $lang['strmemberadded']      = 'Member added.';
    $lang['strmemberaddedbad']   = 'Member add failed.';
    $lang['strdropmember']       = 'Drop member';
    $lang['strconfdropmember']   = 'Are you sure you want to drop the member "%s" from the group "%s"?';
    $lang['strmemberdropped']    = 'Member dropped.';
    $lang['strmemberdroppedbad'] = 'Member drop failed.';

// Roles
    $lang['strrole']           = 'Role';
    $lang['strroles']          = 'Roles';
    $lang['strshowallroles']   = 'Show all roles';
    $lang['strnoroles']        = 'No roles found.';
    $lang['strinheritsprivs']  = 'Inherits privileges?';
    $lang['strcreaterole']     = 'Create role';
    $lang['strcancreaterole']  = 'Can create role?';
    $lang['strrolecreated']    = 'Role created.';
    $lang['strrolecreatedbad'] = 'Create role failed.';
    $lang['strrolealtered']    = 'Role altered.';
    $lang['strrolealteredbad'] = 'Role alter failed.';
    $lang['strcanlogin']       = 'Can login?';
    $lang['strconnlimit']      = 'Connection limit';
    $lang['strdroprole']       = 'Drop role';
    $lang['strconfdroprole']   = 'Are you sure you want to drop the role "%s"?';
    $lang['strroledropped']    = 'Role dropped.';
    $lang['strroledroppedbad'] = 'Role drop failed.';
    $lang['strnolimit']        = 'No limit';
    $lang['strnever']          = 'Never';
    $lang['strroleneedsname']  = 'You must give a name for the role.';

// Privileges
    $lang['strprivilege']    = 'Privilege';
    $lang['strprivileges']   = 'Privileges';
    $lang['strnoprivileges'] = 'This object has default owner privileges.';
    $lang['strgrant']        = 'Grant';
    $lang['strrevoke']       = 'Revoke';
    $lang['strgranted']      = 'Privileges changed.';
    $lang['strgrantfailed']  = 'Failed to change privileges.';
    $lang['strgrantbad']     = 'You must specify at least one user or group and at least one privilege.';
    $lang['strgrantor']      = 'Grantor';
    $lang['strasterisk']     = '*';

// Databases
    $lang['strdatabase']              = 'Database';
    $lang['strdatabases']             = 'Databases';
    $lang['strshowalldatabases']      = 'Show all databases';
    $lang['strnodatabases']           = 'No databases found.';
    $lang['strcreatedatabase']        = 'Create database';
    $lang['strdatabasename']          = 'Database name';
    $lang['strdatabaseneedsname']     = 'You must give a name for your database.';
    $lang['strdatabasecreated']       = 'Database created.';
    $lang['strdatabasecreatedbad']    = 'Database creation failed.';
    $lang['strconfdropdatabase']      = 'Are you sure you want to drop the database "%s"?';
    $lang['strdatabasedropped']       = 'Database dropped.';
    $lang['strdatabasedroppedbad']    = 'Database drop failed.';
    $lang['strentersql']              = 'Enter the SQL to execute below:';
    $lang['strsqlexecuted']           = 'SQL executed.';
    $lang['strvacuumgood']            = 'Vacuum complete.';
    $lang['strvacuumbad']             = 'Vacuum failed.';
    $lang['stranalyzegood']           = 'Analyze complete.';
    $lang['stranalyzebad']            = 'Analyze failed.';
    $lang['strreindexgood']           = 'Reindex complete.';
    $lang['strreindexbad']            = 'Reindex failed.';
    $lang['strfull']                  = 'Full';
    $lang['strfreeze']                = 'Freeze';
    $lang['strforce']                 = 'Force';
    $lang['strsignalsent']            = 'Signal sent.';
    $lang['strsignalsentbad']         = 'Sending signal failed.';
    $lang['strallobjects']            = 'All objects';
    $lang['strdatabasealtered']       = 'Database altered.';
    $lang['strdatabasealteredbad']    = 'Database alter failed.';
    $lang['strspecifydatabasetodrop'] = 'You must specify at least one database to drop.';
    $lang['strtemplatedb']            = 'Template';
    $lang['strconfanalyzedatabase']   = 'Are you sure you want to analyze all tables in database "%s"?';
    $lang['strconfvacuumdatabase']    = 'Are you sure you want to vacuum all tables in database "%s"?';
    $lang['strconfreindexdatabase']   = 'Are you sure you want to reindex all tables in database "%s"?';
    $lang['strconfclusterdatabase']   = 'Are you sure you want to cluster all tables in database "%s"?';

// Views
    $lang['strview']              = 'View';
    $lang['strviews']             = 'Views';
    $lang['strshowallviews']      = 'Show all views';
    $lang['strnoview']            = 'No view found.';
    $lang['strnoviews']           = 'No views found.';
    $lang['strcreateview']        = 'Create view';
    $lang['strviewname']          = 'View name';
    $lang['strviewneedsname']     = 'You must give a name for your view.';
    $lang['strviewneedsdef']      = 'You must give a definition for your view.';
    $lang['strviewneedsfields']   = 'You must give the columns you want selected in your view.';
    $lang['strviewcreated']       = 'View created.';
    $lang['strviewcreatedbad']    = 'View creation failed.';
    $lang['strconfdropview']      = 'Are you sure you want to drop the view "%s"?';
    $lang['strviewdropped']       = 'View dropped.';
    $lang['strviewdroppedbad']    = 'View drop failed.';
    $lang['strviewupdated']       = 'View updated.';
    $lang['strviewupdatedbad']    = 'View update failed.';
    $lang['strviewlink']          = 'Linking keys';
    $lang['strviewconditions']    = 'Additional conditions';
    $lang['strcreateviewwiz']     = 'Create view with wizard';
    $lang['strrenamedupfields']   = 'Rename duplicate fields';
    $lang['strdropdupfields']     = 'Drop duplicate fields';
    $lang['strerrordupfields']    = 'Error on duplicate fields';
    $lang['strviewaltered']       = 'View altered.';
    $lang['strviewalteredbad']    = 'View alteration failed.';
    $lang['strspecifyviewtodrop'] = 'You must specify at least one view to drop.';

// Sequences
    $lang['strsequence']              = 'Sequence';
    $lang['strsequences']             = 'Sequences';
    $lang['strshowallsequences']      = 'Show all sequences';
    $lang['strnosequence']            = 'No sequence found.';
    $lang['strnosequences']           = 'No sequences found.';
    $lang['strcreatesequence']        = 'Create sequence';
    $lang['strlastvalue']             = 'Last value';
    $lang['strincrementby']           = 'Increment by';
    $lang['strstartvalue']            = 'Start value';
    $lang['strrestartvalue']          = 'Restart value';
    $lang['strmaxvalue']              = 'Max value';
    $lang['strminvalue']              = 'Min value';
    $lang['strcachevalue']            = 'Cache value';
    $lang['strlogcount']              = 'Log count';
    $lang['strcancycle']              = 'Can cycle?';
    $lang['striscalled']              = 'Will increment last value before returning next value (is_called)?';
    $lang['strsequenceneedsname']     = 'You must specify a name for your sequence.';
    $lang['strsequencecreated']       = 'Sequence created.';
    $lang['strsequencecreatedbad']    = 'Sequence creation failed.';
    $lang['strconfdropsequence']      = 'Are you sure you want to drop sequence "%s"?';
    $lang['strsequencedropped']       = 'Sequence dropped.';
    $lang['strsequencedroppedbad']    = 'Sequence drop failed.';
    $lang['strsequencerestart']       = 'Sequence restarted.';
    $lang['strsequencerestartbad']    = 'Sequence restart failed.';
    $lang['strsequencereset']         = 'Sequence reset.';
    $lang['strsequenceresetbad']      = 'Sequence reset failed.';
    $lang['strsequencealtered']       = 'Sequence altered.';
    $lang['strsequencealteredbad']    = 'Sequence alteration failed.';
    $lang['strsetval']                = 'Set value';
    $lang['strsequencesetval']        = 'Sequence value set.';
    $lang['strsequencesetvalbad']     = 'Sequence value set failed.';
    $lang['strnextval']               = 'Increment value';
    $lang['strsequencenextval']       = 'Sequence incremented.';
    $lang['strsequencenextvalbad']    = 'Sequence increment failed.';
    $lang['strspecifysequencetodrop'] = 'You must specify at least one sequence to drop.';

// Indexes
    $lang['strindex']              = 'Index';
    $lang['strindexes']            = 'Indexes';
    $lang['strindexname']          = 'Index name';
    $lang['strshowallindexes']     = 'Show all indexes';
    $lang['strnoindex']            = 'No index found.';
    $lang['strnoindexes']          = 'No indexes found.';
    $lang['strcreateindex']        = 'Create index';
    $lang['strtabname']            = 'Tab name';
    $lang['strcolumnname']         = 'Column name';
    $lang['strindexneedsname']     = 'You must give a name for your index.';
    $lang['strindexneedscols']     = 'Indexes require a valid number of columns.';
    $lang['strindexcreated']       = 'Index created.';
    $lang['strindexcreatedbad']    = 'Index creation failed.';
    $lang['strconfdropindex']      = 'Are you sure you want to drop the index "%s"?';
    $lang['strindexdropped']       = 'Index dropped.';
    $lang['strindexdroppedbad']    = 'Index drop failed.';
    $lang['strkeyname']            = 'Key name';
    $lang['struniquekey']          = 'Unique key';
    $lang['strprimarykey']         = 'Primary key';
    $lang['strindextype']          = 'Type of index';
    $lang['strtablecolumnlist']    = 'Columns in table';
    $lang['strindexcolumnlist']    = 'Columns in index';
    $lang['strconfcluster']        = 'Are you sure you want to cluster on "%s"?';
    $lang['strclusteredgood']      = 'Cluster complete.';
    $lang['strclusteredbad']       = 'Cluster failed.';
    $lang['strconcurrently']       = 'Concurrently';
    $lang['strnoclusteravailable'] = 'Table not clustered on an index.';

// Rules
    $lang['strrules']          = 'Rules';
    $lang['strrule']           = 'Rule';
    $lang['strshowallrules']   = 'Show all rules';
    $lang['strnorule']         = 'No rule found.';
    $lang['strnorules']        = 'No rules found.';
    $lang['strcreaterule']     = 'Create rule';
    $lang['strrulename']       = 'Rule name';
    $lang['strruleneedsname']  = 'You must specify a name for your rule.';
    $lang['strrulecreated']    = 'Rule created.';
    $lang['strrulecreatedbad'] = 'Rule creation failed.';
    $lang['strconfdroprule']   = 'Are you sure you want to drop the rule "%s" on "%s"?';
    $lang['strruledropped']    = 'Rule dropped.';
    $lang['strruledroppedbad'] = 'Rule drop failed.';

// Constraints
    $lang['strconstraint']           = 'Constraint';
    $lang['strconstraints']          = 'Constraints';
    $lang['strshowallconstraints']   = 'Show all constraints';
    $lang['strnoconstraints']        = 'No constraints found.';
    $lang['strcreateconstraint']     = 'Create constraint';
    $lang['strconstraintcreated']    = 'Constraint created.';
    $lang['strconstraintcreatedbad'] = 'Constraint creation failed.';
    $lang['strconfdropconstraint']   = 'Are you sure you want to drop the constraint "%s" on "%s"?';
    $lang['strconstraintdropped']    = 'Constraint dropped.';
    $lang['strconstraintdroppedbad'] = 'Constraint drop failed.';
    $lang['straddcheck']             = 'Add check';
    $lang['strcheckneedsdefinition'] = 'Check constraint needs a definition.';
    $lang['strcheckadded']           = 'Check constraint added.';
    $lang['strcheckaddedbad']        = 'Failed to add check constraint.';
    $lang['straddpk']                = 'Add primary key';
    $lang['strpkneedscols']          = 'Primary key requires at least one column.';
    $lang['strpkadded']              = 'Primary key added.';
    $lang['strpkaddedbad']           = 'Failed to add primary key.';
    $lang['stradduniq']              = 'Add unique key';
    $lang['struniqneedscols']        = 'Unique key requires at least one column.';
    $lang['struniqadded']            = 'Unique key added.';
    $lang['struniqaddedbad']         = 'Failed to add unique key.';
    $lang['straddfk']                = 'Add foreign key';
    $lang['strfkneedscols']          = 'Foreign key requires at least one column.';
    $lang['strfkneedstarget']        = 'Foreign key requires a target table.';
    $lang['strfkadded']              = 'Foreign key added.';
    $lang['strfkaddedbad']           = 'Failed to add foreign key.';
    $lang['strfktarget']             = 'Target table';
    $lang['strfkcolumnlist']         = 'Columns in key';
    $lang['strondelete']             = 'ON DELETE';
    $lang['stronupdate']             = 'ON UPDATE';

// Functions
    $lang['strfunction']               = 'Function';
    $lang['strfunctions']              = 'Functions';
    $lang['strshowallfunctions']       = 'Show all functions';
    $lang['strnofunction']             = 'No function found.';
    $lang['strnofunctions']            = 'No functions found.';
    $lang['strcreateplfunction']       = 'Create SQL/PL function';
    $lang['strcreateinternalfunction'] = 'Create internal function';
    $lang['strcreatecfunction']        = 'Create C function';
    $lang['strfunctionname']           = 'Function name';
    $lang['strreturns']                = 'Returns';
    $lang['strproglanguage']           = 'Programming language';
    $lang['strfunctionneedsname']      = 'You must give a name for your function.';
    $lang['strfunctionneedsdef']       = 'You must give a definition for your function.';
    $lang['strfunctioncreated']        = 'Function created.';
    $lang['strfunctioncreatedbad']     = 'Function creation failed.';
    $lang['strconfdropfunction']       = 'Are you sure you want to drop the function "%s"?';
    $lang['strfunctiondropped']        = 'Function dropped.';
    $lang['strfunctiondroppedbad']     = 'Function drop failed.';
    $lang['strfunctionupdated']        = 'Function updated.';
    $lang['strfunctionupdatedbad']     = 'Function update failed.';
    $lang['strobjectfile']             = 'Object File';
    $lang['strlinksymbol']             = 'Link Symbol';
    $lang['strarguments']              = 'Arguments';
    $lang['strargmode']                = 'Mode';
    $lang['strargtype']                = 'Type';
    $lang['strargadd']                 = 'Add another argument';
    $lang['strargremove']              = 'Remove this argument';
    $lang['strargnoargs']              = 'This function will not take any arguments.';
    $lang['strargenableargs']          = 'Enable arguments being passed to this function.';
    $lang['strargnorowabove']          = 'There needs to be a row above this row.';
    $lang['strargnorowbelow']          = 'There needs to be a row below this row.';
    $lang['strargraise']               = 'Move up.';
    $lang['strarglower']               = 'Move down.';
    $lang['strargremoveconfirm']       = 'Are you sure you want to remove this argument? This CANNOT be undone.';
    $lang['strfunctioncosting']        = 'Function Costing';
    $lang['strresultrows']             = 'Result Rows';
    $lang['strexecutioncost']          = 'Execution Cost';
    $lang['strspecifyfunctiontodrop']  = 'You must specify at least one function to drop.';

// Triggers
    $lang['strtrigger']            = 'Trigger';
    $lang['strtriggers']           = 'Triggers';
    $lang['strshowalltriggers']    = 'Show all triggers';
    $lang['strnotrigger']          = 'No trigger found.';
    $lang['strnotriggers']         = 'No triggers found.';
    $lang['strcreatetrigger']      = 'Create trigger';
    $lang['strtriggerneedsname']   = 'You must specify a name for your trigger.';
    $lang['strtriggerneedsfunc']   = 'You must specify a function for your trigger.';
    $lang['strtriggercreated']     = 'Trigger created.';
    $lang['strtriggercreatedbad']  = 'Trigger creation failed.';
    $lang['strconfdroptrigger']    = 'Are you sure you want to drop the trigger "%s" on "%s"?';
    $lang['strconfenabletrigger']  = 'Are you sure you want to enable the trigger "%s" on "%s"?';
    $lang['strconfdisabletrigger'] = 'Are you sure you want to disable the trigger "%s" on "%s"?';
    $lang['strtriggerdropped']     = 'Trigger dropped.';
    $lang['strtriggerdroppedbad']  = 'Trigger drop failed.';
    $lang['strtriggerenabled']     = 'Trigger enabled.';
    $lang['strtriggerenabledbad']  = 'Trigger enable failed.';
    $lang['strtriggerdisabled']    = 'Trigger disabled.';
    $lang['strtriggerdisabledbad'] = 'Trigger disable failed.';
    $lang['strtriggeraltered']     = 'Trigger altered.';
    $lang['strtriggeralteredbad']  = 'Trigger alteration failed.';
    $lang['strforeach']            = 'For each';

// Types
    $lang['strtype']           = 'Type';
    $lang['strtypes']          = 'Types';
    $lang['strshowalltypes']   = 'Show all types';
    $lang['strnotype']         = 'No type found.';
    $lang['strnotypes']        = 'No types found.';
    $lang['strcreatetype']     = 'Create type';
    $lang['strcreatecomptype'] = 'Create composite type';
    $lang['strcreateenumtype'] = 'Create enum type';
    $lang['strtypeneedsfield'] = 'You must specify at least one field.';
    $lang['strtypeneedsvalue'] = 'You must specify at least one value.';
    $lang['strtypeneedscols']  = 'You must specify a valid number of fields.';
    $lang['strtypeneedsvals']  = 'You must specify a valid number of values.';
    $lang['strinputfn']        = 'Input function';
    $lang['stroutputfn']       = 'Output function';
    $lang['strpassbyval']      = 'Passed by val?';
    $lang['stralignment']      = 'Alignment';
    $lang['strelement']        = 'Element';
    $lang['strdelimiter']      = 'Delimiter';
    $lang['strstorage']        = 'Storage';
    $lang['strfield']          = 'Field';
    $lang['strnumfields']      = 'Num. of fields';
    $lang['strnumvalues']      = 'Num. of values';
    $lang['strtypeneedsname']  = 'You must give a name for your type.';
    $lang['strtypeneedslen']   = 'You must give a length for your type.';
    $lang['strtypecreated']    = 'Type created.';
    $lang['strtypecreatedbad'] = 'Type creation failed.';
    $lang['strconfdroptype']   = 'Are you sure you want to drop the type "%s"?';
    $lang['strtypedropped']    = 'Type dropped.';
    $lang['strtypedroppedbad'] = 'Type drop failed.';
    $lang['strflavor']         = 'Flavor';
    $lang['strbasetype']       = 'Base';
    $lang['strcompositetype']  = 'Composite';
    $lang['strpseudotype']     = 'Pseudo';
    $lang['strenum']           = 'Enum';
    $lang['strenumvalues']     = 'Enum values';

// Schemas
    $lang['strschema']              = 'Schema';
    $lang['strschemas']             = 'Schemas';
    $lang['strshowallschemas']      = 'Show all schemas';
    $lang['strnoschema']            = 'No schema found.';
    $lang['strnoschemas']           = 'No schemas found.';
    $lang['strcreateschema']        = 'Create schema';
    $lang['strschemaname']          = 'Schema name';
    $lang['strschemaneedsname']     = 'You must give a name for your schema.';
    $lang['strschemacreated']       = 'Schema created.';
    $lang['strschemacreatedbad']    = 'Schema creation failed.';
    $lang['strconfdropschema']      = 'Are you sure you want to drop the schema "%s"?';
    $lang['strschemadropped']       = 'Schema dropped.';
    $lang['strschemadroppedbad']    = 'Schema drop failed.';
    $lang['strschemaaltered']       = 'Schema altered.';
    $lang['strschemaalteredbad']    = 'Schema alteration failed.';
    $lang['strsearchpath']          = 'Schema search path';
    $lang['strspecifyschematodrop'] = 'You must specify at least one schema to drop.';

// Reports

// Domains
    $lang['strdomain']           = 'Domain';
    $lang['strdomains']          = 'Domains';
    $lang['strshowalldomains']   = 'Show all domains';
    $lang['strnodomains']        = 'No domains found.';
    $lang['strcreatedomain']     = 'Create domain';
    $lang['strdomaindropped']    = 'Domain dropped.';
    $lang['strdomaindroppedbad'] = 'Domain drop failed.';
    $lang['strconfdropdomain']   = 'Are you sure you want to drop the domain "%s"?';
    $lang['strdomainneedsname']  = 'You must give a name for your domain.';
    $lang['strdomaincreated']    = 'Domain created.';
    $lang['strdomaincreatedbad'] = 'Domain creation failed.';
    $lang['strdomainaltered']    = 'Domain altered.';
    $lang['strdomainalteredbad'] = 'Domain alteration failed.';

// Operators
    $lang['stroperator']           = 'Operator';
    $lang['stroperators']          = 'Operators';
    $lang['strshowalloperators']   = 'Show all operators';
    $lang['strnooperator']         = 'No operator found.';
    $lang['strnooperators']        = 'No operators found.';
    $lang['strcreateoperator']     = 'Create operator';
    $lang['strleftarg']            = 'Left Arg Type';
    $lang['strrightarg']           = 'Right Arg Type';
    $lang['strcommutator']         = 'Commutator';
    $lang['strnegator']            = 'Negator';
    $lang['strrestrict']           = 'Restrict';
    $lang['strjoin']               = 'Join';
    $lang['strhashes']             = 'Hashes';
    $lang['strmerges']             = 'Merges';
    $lang['strleftsort']           = 'Left sort';
    $lang['strrightsort']          = 'Right sort';
    $lang['strlessthan']           = 'Less than';
    $lang['strgreaterthan']        = 'Greater than';
    $lang['stroperatorneedsname']  = 'You must give a name for your operator.';
    $lang['stroperatorcreated']    = 'Operator created.';
    $lang['stroperatorcreatedbad'] = 'Operator creation failed.';
    $lang['strconfdropoperator']   = 'Are you sure you want to drop the operator "%s"?';
    $lang['stroperatordropped']    = 'Operator dropped.';
    $lang['stroperatordroppedbad'] = 'Operator drop failed.';

// Casts
    $lang['strcasts']        = 'Casts';
    $lang['strnocasts']      = 'No casts found.';
    $lang['strsourcetype']   = 'Source type';
    $lang['strtargettype']   = 'Target type';
    $lang['strimplicit']     = 'Implicit';
    $lang['strinassignment'] = 'In assignment';
    $lang['strbinarycompat'] = '(Binary compatible)';

// Conversions
    $lang['strconversions']    = 'Conversions';
    $lang['strnoconversions']  = 'No conversions found.';
    $lang['strsourceencoding'] = 'Source encoding';
    $lang['strtargetencoding'] = 'Target encoding';

// Languages
    $lang['strlanguages']   = 'Languages';
    $lang['strnolanguages'] = 'No languages found.';
    $lang['strtrusted']     = 'Trusted';

// Info
    $lang['strnoinfo']          = 'No information available.';
    $lang['strreferringtables'] = 'Referring tables';
    $lang['strparenttables']    = 'Parent tables';
    $lang['strchildtables']     = 'Child tables';

// Aggregates
    $lang['straggregate']           = 'Aggregate';
    $lang['straggregates']          = 'Aggregates';
    $lang['strnoaggregates']        = 'No aggregates found.';
    $lang['stralltypes']            = '(All types)';
    $lang['strcreateaggregate']     = 'Create aggregate';
    $lang['straggrbasetype']        = 'Input data type';
    $lang['straggrsfunc']           = 'State transition function';
    $lang['straggrstype']           = 'Data type for state value';
    $lang['straggrffunc']           = 'Final function';
    $lang['straggrinitcond']        = 'Initial condition';
    $lang['straggrsortop']          = 'Sort operator';
    $lang['strconfdropaggregate']   = 'Are you sure you want to drop the aggregate "%s"?';
    $lang['straggregatedropped']    = 'Aggregate dropped.';
    $lang['straggregatedroppedbad'] = 'Aggregate drop failed.';
    $lang['straggraltered']         = 'Aggregate altered.';
    $lang['straggralteredbad']      = 'Aggregate alteration failed.';
    $lang['straggrneedsname']       = 'You must specify a name for the aggregate.';
    $lang['straggrneedsbasetype']   = 'You must specify the input data type for the aggregate.';
    $lang['straggrneedssfunc']      = 'You must specify the name of the state transition function for the aggregate.';
    $lang['straggrneedsstype']      = 'You must specify the data type for the aggregate\'s state value.';
    $lang['straggrcreated']         = 'Aggregate created.';
    $lang['straggrcreatedbad']      = 'Aggregate creation failed.';
    $lang['straggrshowall']         = 'Show all aggregates';

// Operator Classes
    $lang['stropclasses']    = 'Op Classes';
    $lang['strnoopclasses']  = 'No operator classes found.';
    $lang['straccessmethod'] = 'Access method';

// Stats and performance
    $lang['strrowperf']    = 'Row Performance';
    $lang['strioperf']     = 'I/O Performance';
    $lang['stridxrowperf'] = 'Index Row Performance';
    $lang['stridxioperf']  = 'Index I/O Performance';
    $lang['strpercent']    = '%';
    $lang['strsequential'] = 'Sequential';
    $lang['strscan']       = 'Scan';
    $lang['strread']       = 'Read';
    $lang['strfetch']      = 'Fetch';
    $lang['strheap']       = 'Heap';
    $lang['strtoast']      = 'TOAST';
    $lang['strtoastindex'] = 'TOAST Index';
    $lang['strcache']      = 'Cache';
    $lang['strdisk']       = 'Disk';
    $lang['strrows2']      = 'Rows';

// Tablespaces
    $lang['strtablespace']           = 'Tablespace';
    $lang['strtablespaces']          = 'Tablespaces';
    $lang['strshowalltablespaces']   = 'Show all tablespaces';
    $lang['strnotablespaces']        = 'No tablespaces found.';
    $lang['strcreatetablespace']     = 'Create tablespace';
    $lang['strlocation']             = 'Location';
    $lang['strtablespaceneedsname']  = 'You must give a name for your tablespace.';
    $lang['strtablespaceneedsloc']   = 'You must give a directory in which to create the tablespace.';
    $lang['strtablespacecreated']    = 'Tablespace created.';
    $lang['strtablespacecreatedbad'] = 'Tablespace creation failed.';
    $lang['strconfdroptablespace']   = 'Are you sure you want to drop the tablespace "%s"?';
    $lang['strtablespacedropped']    = 'Tablespace dropped.';
    $lang['strtablespacedroppedbad'] = 'Tablespace drop failed.';
    $lang['strtablespacealtered']    = 'Tablespace altered.';
    $lang['strtablespacealteredbad'] = 'Tablespace alteration failed.';

// Miscellaneous
    $lang['strtopbar']          = '%s running on %s:%s -- You are logged in as user "%s"';
    $lang['strtimefmt']         = 'jS M, Y g:iA';
    $lang['strhelp']            = 'Help';
    $lang['strhelpicon']        = '?';
    $lang['strhelppagebrowser'] = 'Help page browser';
    $lang['strselecthelppage']  = 'Select a help page';
    $lang['strinvalidhelppage'] = 'Invalid help page.';
    $lang['strlogintitle']      = 'Login to %s';
    $lang['strlogoutmsg']       = 'Logged out of %s';
    $lang['strloading']         = 'Loading...';
    $lang['strerrorloading']    = 'Error Loading';
    $lang['strclicktoreload']   = 'Click to reload';

// Autovacuum
    $lang['strautovacuum']             = 'Autovacuum';
    $lang['strturnedon']               = 'Turned On';
    $lang['strturnedoff']              = 'Turned Off';
    $lang['strenabled']                = 'Enabled';
    $lang['strnovacuumconf']           = 'No autovacuum configuration found.';
    $lang['strvacuumbasethreshold']    = 'Vacuum Base Threshold';
    $lang['strvacuumscalefactor']      = 'Vacuum Scale Factor';
    $lang['stranalybasethreshold']     = 'Analyze Base Threshold';
    $lang['stranalyzescalefactor']     = 'Analyze Scale Factor';
    $lang['strvacuumcostdelay']        = 'Vacuum Cost Delay';
    $lang['strvacuumcostlimit']        = 'Vacuum Cost Limit';
    $lang['strvacuumpertable']         = 'Autovacuum setup per table';
    $lang['straddvacuumtable']         = 'Add autovacuum setup for a table';
    $lang['streditvacuumtable']        = 'Edit autovacuum setup for table %s';
    $lang['strdelvacuumtable']         = 'Delete autovacuum setup for table %s ?';
    $lang['strvacuumtablereset']       = 'Autovacuum setup for table %s reset to default values';
    $lang['strdelvacuumtablefail']     = 'Fail to remove the autovacuum setup for table %s';
    $lang['strsetvacuumtablesaved']    = 'Autovacuum setup for table %s saved.';
    $lang['strsetvacuumtablefail']     = 'Autovacuum setup for table %s failed.';
    $lang['strspecifydelvacuumtable']  = 'You must specify the table you want remove the autovacuum parameters from.';
    $lang['strspecifyeditvacuumtable'] = 'You must specify the table you want to edit the autovacuum parameters from.';
    $lang['strnotdefaultinred']        = 'Not default values are in red.';

// Table-level Locks
    $lang['strlocks']              = 'Locks';
    $lang['strtransaction']        = 'Transaction ID';
    $lang['strvirtualtransaction'] = 'Virtual Transaction ID';
    $lang['strprocessid']          = 'Process ID';
    $lang['strmode']               = 'Lock mode';
    $lang['strislockheld']         = 'Is lock held?';

// Prepared transactions
    $lang['strpreparedxacts'] = 'Prepared transactions';
    $lang['strxactid']        = 'Transaction ID';
    $lang['strgid']           = 'Global ID';

// Fulltext search
    $lang['strfulltext']                = 'Full Text Search';
    $lang['strftsconfig']               = 'FTS configuration';
    $lang['strftsconfigs']              = 'Configurations';
    $lang['strftscreateconfig']         = 'Create FTS configuration';
    $lang['strftscreatedict']           = 'Create dictionary';
    $lang['strftscreatedicttemplate']   = 'Create dictionary template';
    $lang['strftscreateparser']         = 'Create parser';
    $lang['strftsnoconfigs']            = 'No FTS configuration found.';
    $lang['strftsconfigdropped']        = 'FTS configuration dropped.';
    $lang['strftsconfigdroppedbad']     = 'FTS configuration drop failed.';
    $lang['strconfdropftsconfig']       = 'Are you sure you want to drop the FTS configuration "%s"?';
    $lang['strconfdropftsdict']         = 'Are you sure you want to drop the FTS dictionary "%s"?';
    $lang['strconfdropftsmapping']      = 'Are you sure you want to drop mapping "%s" of FTS configuration "%s"?';
    $lang['strftstemplate']             = 'Template';
    $lang['strftsparser']               = 'Parser';
    $lang['strftsconfigneedsname']      = 'You must give a name for your FTS configuration.';
    $lang['strftsconfigcreated']        = 'FTS configuration created.';
    $lang['strftsconfigcreatedbad']     = 'FTS configuration creation failed.';
    $lang['strftsmapping']              = 'Mapping';
    $lang['strftsdicts']                = 'Dictionaries';
    $lang['strftsdict']                 = 'Dictionary';
    $lang['strftsemptymap']             = 'Empty FTS configuration map.';
    $lang['strftsconfigaltered']        = 'FTS configuration altered.';
    $lang['strftsconfigalteredbad']     = 'FTS configuration alter failed.';
    $lang['strftsconfigmap']            = 'FTS configuration map';
    $lang['strftsparsers']              = 'FTS parsers';
    $lang['strftsnoparsers']            = 'No FTS parsers available.';
    $lang['strftsnodicts']              = 'No FTS dictionaries available.';
    $lang['strftsdictcreated']          = 'FTS dictionary created.';
    $lang['strftsdictcreatedbad']       = 'FTS dictionary creation failed.';
    $lang['strftslexize']               = 'Lexize';
    $lang['strftsinit']                 = 'Init';
    $lang['strftsoptionsvalues']        = 'Options and values';
    $lang['strftsdictneedsname']        = 'You must give a name for your FTS dictionary.';
    $lang['strftsdictdropped']          = 'FTS dictionary dropped.';
    $lang['strftsdictdroppedbad']       = 'FTS dictionary drop failed.';
    $lang['strftsdictaltered']          = 'FTS dictionary altered.';
    $lang['strftsdictalteredbad']       = 'FTS dictionary alter failed.';
    $lang['strftsaddmapping']           = 'Add new mapping';
    $lang['strftsspecifymappingtodrop'] = 'You must specify at least one mapping to drop.';
    $lang['strftsspecifyconfigtoalter'] = 'You must specify a FTS configuration to alter';
    $lang['strftsmappingdropped']       = 'FTS mapping dropped.';
    $lang['strftsmappingdroppedbad']    = 'FTS mapping drop failed.';
    $lang['strftsnodictionaries']       = 'No dictionaries found.';
    $lang['strftsmappingaltered']       = 'FTS mapping altered.';
    $lang['strftsmappingalteredbad']    = 'FTS mapping alter failed.';
    $lang['strftsmappingadded']         = 'FTS mapping added.';
    $lang['strftsmappingaddedbad']      = 'FTS mapping add failed.';
    $lang['strftstabconfigs']           = 'Configurations';
    $lang['strftstabdicts']             = 'Dictionaries';
    $lang['strftstabparsers']           = 'Parsers';
    $lang['strftscantparsercopy']       = 'Can\'t specify both parser and template during text search configuration creation.';

//Plugins
    $lang['strpluginnotfound'] =
        'Error: plugin \'%s\' not found. Check if this plugin exists in the plugins/ directory, or if this plugins has a plugin.php file. Plugin\'s names are case sensitive';
    $lang['stractionnotfound'] = 'Error: action \'%s\' not found in the \'%s\' plugin, or it was not specified as an action.';
    $lang['strhooknotfound']   = 'Error: hook \'%s\' is not avaliable.';