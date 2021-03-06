<?php
/**
 * @package Clearbricks
 *
 * Tiny library including:
 * - Database abstraction layer (MySQL/MariadDB, postgreSQL and SQLite)
 * - File manager
 * - Feed reader
 * - HTML filter/validator
 * - Images manipulation tools
 * - Mail utilities
 * - HTML pager
 * - REST Server
 * - Database driven session handler
 * - Simple Template Systeme
 * - URL Handler
 * - Wiki to XHTML Converter
 * - HTTP/NNTP clients
 * - XML-RPC Client and Server
 * - Zip tools
 * - Diff tools
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 * @version 1.0
 */
require dirname(__FILE__) . '/common/_main.php';

# Database Abstraction Layer
$__autoload['dbLayer']  = dirname(__FILE__) . '/dblayer/dblayer.php';
$__autoload['dbStruct'] = dirname(__FILE__) . '/dbschema/class.dbstruct.php';
$__autoload['dbSchema'] = dirname(__FILE__) . '/dbschema/class.dbschema.php';

# Files Manager
$__autoload['filemanager'] = dirname(__FILE__) . '/filemanager/class.filemanager.php';
$__autoload['fileItem']    = dirname(__FILE__) . '/filemanager/class.filemanager.php';

# Feed Reader
$__autoload['feedParser'] = dirname(__FILE__) . '/net.http.feed/class.feed.parser.php';
$__autoload['feedReader'] = dirname(__FILE__) . '/net.http.feed/class.feed.reader.php';

# HTML Filter
$__autoload['htmlFilter'] = dirname(__FILE__) . '/html.filter/class.html.filter.php';

# HTML Validator
$__autoload['htmlValidator'] = dirname(__FILE__) . '/html.validator/class.html.validator.php';

# Image Manipulation Tools
$__autoload['imageMeta']  = dirname(__FILE__) . '/image/class.image.meta.php';
$__autoload['imageTools'] = dirname(__FILE__) . '/image/class.image.tools.php';

# Send Mail Utilities
$__autoload['mail'] = dirname(__FILE__) . '/mail/class.mail.php';

# Mail Convert and Rewrap
$__autoload['mailConvert'] = dirname(__FILE__) . '/mail.convert/class.mail.convert.php';

# Send Mail Through Sockets
$__autoload['socketMail'] = dirname(__FILE__) . '/mail/class.socket.mail.php';

# Mime Message Parser
$__autoload['mimeMessage'] = dirname(__FILE__) . '/mail.mime/class.mime.message.php';

# HTML Pager
$__autoload['pager'] = dirname(__FILE__) . '/pager/class.pager.php';

# REST Server
$__autoload['restServer'] = dirname(__FILE__) . '/rest/class.rest.php';
$__autoload['xmlTag']     = dirname(__FILE__) . '/rest/class.rest.php';

# Database PHP Session
$__autoload['sessionDB'] = dirname(__FILE__) . '/session.db/class.session.db.php';

# Simple Template Systeme
$__autoload['template']               = dirname(__FILE__) . '/template/class.template.php';
$__autoload['tplNode']                = dirname(__FILE__) . '/template/class.tplnode.php';
$__autoload['tplNodeBlock']           = dirname(__FILE__) . '/template/class.tplnodeblock.php';
$__autoload['tplNodeText']            = dirname(__FILE__) . '/template/class.tplnodetext.php';
$__autoload['tplNodeValue']           = dirname(__FILE__) . '/template/class.tplnodevalue.php';
$__autoload['tplNodeBlockDefinition'] = dirname(__FILE__) . '/template/class.tplnodeblockdef.php';
$__autoload['tplNodeValueParent']     = dirname(__FILE__) . '/template/class.tplnodevalueparent.php';

# URL Handler
$__autoload['urlHandler'] = dirname(__FILE__) . '/url.handler/class.url.handler.php';

# Wiki to XHTML Converter
$__autoload['wiki2xhtml'] = dirname(__FILE__) . '/text.wiki2xhtml/class.wiki2xhtml.php';

# SQL Batch on XML Files
$__autoload['xmlsql'] = dirname(__FILE__) . '/xmlsql/class.xmlsql.php';

# Common Socket Class
$__autoload['netSocket'] = dirname(__FILE__) . '/net/class.net.socket.php';

# HTTP Client
$__autoload['netHttp']    = dirname(__FILE__) . '/net.http/class.net.http.php';
$__autoload['HttpClient'] = dirname(__FILE__) . '/net.http/class.net.http.php';

# NNTP Client
$__autoload['netNntp']     = dirname(__FILE__) . '/net.nntp/class.net.nntp.php';
$__autoload['nntpMessage'] = dirname(__FILE__) . '/net.nntp/class.nntp.message.php';

# XML-RPC Client and Server
$__autoload['IXR_Value']               = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_Message']             = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_Server']              = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_Request']             = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_Client']              = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_Error']               = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_Date']                = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_Base64']              = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_IntrospectionServer'] = dirname(__FILE__) . '/ext/incutio.ixr_library.php';
$__autoload['IXR_ClientMulticall']     = dirname(__FILE__) . '/ext/incutio.ixr_library.php';

$__autoload['xmlrpcValue']               = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcMessage']             = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcRequest']             = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcDate']                = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcBase64']              = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcClient']              = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcClientMulticall']     = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcServer']              = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcIntrospectionServer'] = dirname(__FILE__) . '/net.xmlrpc/class.net.xmlrpc.php';

# Zip tools
$__autoload['fileUnzip'] = dirname(__FILE__) . '/zip/class.unzip.php';
$__autoload['fileZip']   = dirname(__FILE__) . '/zip/class.zip.php';

# Diff tools
$__autoload['diff']     = dirname(__FILE__) . '/diff/lib.diff.php';
$__autoload['tidyDiff'] = dirname(__FILE__) . '/diff/lib.tidy.diff.php';

# HTML Form helpers
$__autoload['formComponent'] = dirname(__FILE__) . '/html.form/class.form.component.php';
$__autoload['formForm']      = dirname(__FILE__) . '/html.form/class.form.form.php';
$__autoload['formTextarea']  = dirname(__FILE__) . '/html.form/class.form.textarea.php';
$__autoload['formInput']     = dirname(__FILE__) . '/html.form/class.form.input.php';
$__autoload['formCheckbox']  = dirname(__FILE__) . '/html.form/class.form.checkbox.php';
$__autoload['formColor']     = dirname(__FILE__) . '/html.form/class.form.color.php';
$__autoload['formDate']      = dirname(__FILE__) . '/html.form/class.form.date.php';
$__autoload['formDatetime']  = dirname(__FILE__) . '/html.form/class.form.datetime.php';
$__autoload['formEmail']     = dirname(__FILE__) . '/html.form/class.form.email.php';
$__autoload['formFile']      = dirname(__FILE__) . '/html.form/class.form.file.php';
$__autoload['formHidden']    = dirname(__FILE__) . '/html.form/class.form.hidden.php';
$__autoload['formNumber']    = dirname(__FILE__) . '/html.form/class.form.number.php';
$__autoload['formPassword']  = dirname(__FILE__) . '/html.form/class.form.password.php';
$__autoload['formRadio']     = dirname(__FILE__) . '/html.form/class.form.radio.php';
$__autoload['formTime']      = dirname(__FILE__) . '/html.form/class.form.time.php';
$__autoload['formUrl']       = dirname(__FILE__) . '/html.form/class.form.url.php';
$__autoload['formLabel']     = dirname(__FILE__) . '/html.form/class.form.label.php';
$__autoload['formFieldset']  = dirname(__FILE__) . '/html.form/class.form.fieldset.php';
$__autoload['formLegend']    = dirname(__FILE__) . '/html.form/class.form.legend.php';
$__autoload['formSelect']    = dirname(__FILE__) . '/html.form/class.form.select.php';
$__autoload['formOptgroup']  = dirname(__FILE__) . '/html.form/class.form.optgroup.php';
$__autoload['formOption']    = dirname(__FILE__) . '/html.form/class.form.option.php';
