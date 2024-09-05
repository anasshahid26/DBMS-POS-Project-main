<?php

// Global variable for table object
$items_type = NULL;

//
// Table class for items_type
//
class critems_type extends crTableBase {

//	var $SelectLimit = TRUE;
	var $item_tp_id;
	var $item_tp_desc;
	var $item_id;
	var $company_name;
	var $name;
	var $batch_no;
	var $manufacturer_date;
	var $expiry_date;
	var $formula;
	var $power;
	var $quantity;
	var $unit_price;

	//
	// Table class constructor
	//
	function __construct() {
		global $ReportLanguage;
		$this->TableVar = 'items_type';
		$this->TableName = 'items_type';
		$this->TableType = 'TABLE';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0;

		// item_tp_id
		$this->item_tp_id = new crField('items_type', 'items_type', 'x_item_tp_id', 'item_tp_id', '`item_tp_id`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->item_tp_id->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['item_tp_id'] = &$this->item_tp_id;
		$this->item_tp_id->DateFilter = "";
		$this->item_tp_id->SqlSelect = "";
		$this->item_tp_id->SqlOrderBy = "";

		// item_tp_desc
		$this->item_tp_desc = new crField('items_type', 'items_type', 'x_item_tp_desc', 'item_tp_desc', '`item_tp_desc`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['item_tp_desc'] = &$this->item_tp_desc;
		$this->item_tp_desc->DateFilter = "";
		$this->item_tp_desc->SqlSelect = "SELECT DISTINCT `item_tp_desc` FROM " . $this->SqlFrom();
		$this->item_tp_desc->SqlOrderBy = "`item_tp_desc`";

		// item_id
		$this->item_id = new crField('items_type', 'items_type', 'x_item_id', 'item_id', '`item_id`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->item_id->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['item_id'] = &$this->item_id;
		$this->item_id->DateFilter = "";
		$this->item_id->SqlSelect = "";
		$this->item_id->SqlOrderBy = "";

		// company_name
		$this->company_name = new crField('items_type', 'items_type', 'x_company_name', 'company_name', '`company_name`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['company_name'] = &$this->company_name;
		$this->company_name->DateFilter = "";
		$this->company_name->SqlSelect = "";
		$this->company_name->SqlOrderBy = "";

		// name
		$this->name = new crField('items_type', 'items_type', 'x_name', 'name', '`name`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['name'] = &$this->name;
		$this->name->DateFilter = "";
		$this->name->SqlSelect = "";
		$this->name->SqlOrderBy = "";

		// batch_no
		$this->batch_no = new crField('items_type', 'items_type', 'x_batch_no', 'batch_no', '`batch_no`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->batch_no->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['batch_no'] = &$this->batch_no;
		$this->batch_no->DateFilter = "";
		$this->batch_no->SqlSelect = "";
		$this->batch_no->SqlOrderBy = "";

		// manufacturer_date
		$this->manufacturer_date = new crField('items_type', 'items_type', 'x_manufacturer_date', 'manufacturer_date', '`manufacturer_date`', 133, EWR_DATATYPE_DATE, 7);
		$this->manufacturer_date->FldDefaultErrMsg = str_replace("%s", "/", $ReportLanguage->Phrase("IncorrectDateDMY"));
		$this->fields['manufacturer_date'] = &$this->manufacturer_date;
		$this->manufacturer_date->DateFilter = "";
		$this->manufacturer_date->SqlSelect = "";
		$this->manufacturer_date->SqlOrderBy = "";

		// expiry_date
		$this->expiry_date = new crField('items_type', 'items_type', 'x_expiry_date', 'expiry_date', '`expiry_date`', 133, EWR_DATATYPE_DATE, 7);
		$this->expiry_date->FldDefaultErrMsg = str_replace("%s", "/", $ReportLanguage->Phrase("IncorrectDateDMY"));
		$this->fields['expiry_date'] = &$this->expiry_date;
		$this->expiry_date->DateFilter = "";
		$this->expiry_date->SqlSelect = "";
		$this->expiry_date->SqlOrderBy = "";

		// formula
		$this->formula = new crField('items_type', 'items_type', 'x_formula', 'formula', '`formula`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['formula'] = &$this->formula;
		$this->formula->DateFilter = "";
		$this->formula->SqlSelect = "";
		$this->formula->SqlOrderBy = "";

		// power
		$this->power = new crField('items_type', 'items_type', 'x_power', 'power', '`power`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['power'] = &$this->power;
		$this->power->DateFilter = "";
		$this->power->SqlSelect = "";
		$this->power->SqlOrderBy = "";

		// quantity
		$this->quantity = new crField('items_type', 'items_type', 'x_quantity', 'quantity', '`quantity`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->quantity->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['quantity'] = &$this->quantity;
		$this->quantity->DateFilter = "";
		$this->quantity->SqlSelect = "SELECT DISTINCT `quantity` FROM " . $this->SqlFrom();
		$this->quantity->SqlOrderBy = "`quantity`";

		// unit_price
		$this->unit_price = new crField('items_type', 'items_type', 'x_unit_price', 'unit_price', '`unit_price`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->unit_price->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['unit_price'] = &$this->unit_price;
		$this->unit_price->DateFilter = "";
		$this->unit_price->SqlSelect = "";
		$this->unit_price->SqlOrderBy = "";
	}

	// Multiple column sort
	function UpdateSort(&$ofld, $ctrl) {
		if ($this->CurrentOrder == $ofld->FldName) {
			$sLastSort = $ofld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$sThisSort = $this->CurrentOrderType;
			} else {
				$sThisSort = ($sLastSort == "ASC") ? "DESC" : "ASC";
			}
			$ofld->setSort($sThisSort);
		} else {
			if ($ofld->GroupingFieldId == 0 && !$ctrl) $ofld->setSort("");
		}
	}

	// Get Sort SQL
	function SortSql() {
		$sDtlSortSql = "";
		$argrps = array();
		foreach ($this->fields as $fld) {
			if ($fld->getSort() <> "") {
				if ($fld->GroupingFieldId > 0) {
					if ($fld->FldGroupSql <> "")
						$argrps[$fld->GroupingFieldId] = str_replace("%s", $fld->FldExpression, $fld->FldGroupSql) . " " . $fld->getSort();
					else
						$argrps[$fld->GroupingFieldId] = $fld->FldExpression . " " . $fld->getSort();
				} else {
					if ($sDtlSortSql <> "") $sDtlSortSql .= ", ";
					$sDtlSortSql .= $fld->FldExpression . " " . $fld->getSort();
				}
			}
		}
		$sSortSql = "";
		foreach ($argrps as $grp) {
			if ($sSortSql <> "") $sSortSql .= ", ";
			$sSortSql .= $grp;
		}
		if ($sDtlSortSql <> "") {
			if ($sSortSql <> "") $sSortSql .= ",";
			$sSortSql .= $sDtlSortSql;
		}
		return $sSortSql;
	}

	// Table level SQL
	function SqlFrom() { // From
		return "`items_type`";
	}

	function SqlSelect() { // Select
		return "SELECT * FROM " . $this->SqlFrom();
	}

	function SqlWhere() { // Where
		$sWhere = "";
		return $sWhere;
	}

	function SqlGroupBy() { // Group By
		return "";
	}

	function SqlHaving() { // Having
		return "";
	}

	function SqlOrderBy() { // Order By
		return "";
	}

	function SqlSelectAgg() {
		return "SELECT * FROM " . $this->SqlFrom();
	}

	function SqlAggPfx() {
		return "";
	}

	function SqlAggSfx() {
		return "";
	}

	function SqlSelectCount() {
		return "SELECT COUNT(*) FROM " . $this->SqlFrom();
	}

	// Sort URL
	function SortUrl(&$fld) {
		if ($this->Export <> "" ||
			in_array($fld->FldType, array(128, 204, 205))) { // Unsortable data type
				return "";
		} elseif ($fld->Sortable) {

			//$sUrlParm = "order=" . urlencode($fld->FldName) . "&ordertype=" . $fld->ReverseSort();
			$sUrlParm = "order=" . urlencode($fld->FldName) . "&amp;ordertype=" . $fld->ReverseSort();
			return ewr_CurrentPage() . "?" . $sUrlParm;
		} else {
			return "";
		}
	}

	// Table level events
	// Page Selecting event
	function Page_Selecting(&$filter) {

		// Enter your code here	
	}

	// Page Breaking event
	function Page_Breaking(&$break, &$content) {

		// Example:
		//$break = FALSE; // Skip page break, or
		//$content = "<div style=\"page-break-after:always;\">&nbsp;</div>"; // Modify page break content

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here	
	}

	// Cell Rendered event
	function Cell_Rendered(&$Field, $CurrentValue, &$ViewValue, &$ViewAttrs, &$CellAttrs, &$HrefValue, &$LinkAttrs) {

		//$ViewValue = "xxx";
		//$ViewAttrs["style"] = "xxx";

	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>); 

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}

	// Load Filters event
	function Page_FilterLoad() {

		// Enter your code here
		// Example: Register/Unregister Custom Extended Filter
		//ewr_RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A', 'GetStartsWithAFilter'); // With function, or
		//ewr_RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A'); // No function, use Page_Filtering event
		//ewr_UnregisterFilter($this-><Field>, 'StartsWithA');

	}

	// Page Filter Validated event
	function Page_FilterValidated() {

		// Example:
		//$this->MyField1->SearchValue = "your search criteria"; // Search value

	}

	// Page Filtering event
	function Page_Filtering(&$fld, &$filter, $typ, $opr = "", $val = "", $cond = "", $opr2 = "", $val2 = "") {

		// Note: ALWAYS CHECK THE FILTER TYPE ($typ)! Example:
		// if ($typ == "dropdown" && $fld->FldName == "MyField") // Dropdown filter
		//     $filter = "..."; // Modify the filter
		// if ($typ == "extended" && $fld->FldName == "MyField") // Extended filter
		//     $filter = "..."; // Modify the filter
		// if ($typ == "popup" && $fld->FldName == "MyField") // Popup filter
		//     $filter = "..."; // Modify the filter
		// if ($typ == "custom" && $opr == "..." && $fld->FldName == "MyField") // Custom filter, $opr is the custom filter ID
		//     $filter = "..."; // Modify the filter

	}

	// Email Sending event
	function Email_Sending(&$Email, &$Args) {

		//var_dump($Email); var_dump($Args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		// Enter your code here
	}
}
?>
