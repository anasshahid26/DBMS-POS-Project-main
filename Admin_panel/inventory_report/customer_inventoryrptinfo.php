<?php

// Global variable for table object
$customer_inventory = NULL;

//
// Table class for customer_inventory
//
class crcustomer_inventory extends crTableBase {

//	var $SelectLimit = TRUE;
	var $reciept_no;
	var $date;
	var $item_type;
	var $item;
	var $formula;
	var $power;
	var $quantity;
	var $price;
	var $total;

	//
	// Table class constructor
	//
	function __construct() {
		global $ReportLanguage;
		$this->TableVar = 'customer_inventory';
		$this->TableName = 'customer_inventory';
		$this->TableType = 'TABLE';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0;

		// reciept_no
		$this->reciept_no = new crField('customer_inventory', 'customer_inventory', 'x_reciept_no', 'reciept_no', '`reciept_no`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->reciept_no->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['reciept_no'] = &$this->reciept_no;
		$this->reciept_no->DateFilter = "";
		$this->reciept_no->SqlSelect = "";
		$this->reciept_no->SqlOrderBy = "";

		// date
		$this->date = new crField('customer_inventory', 'customer_inventory', 'x_date', 'date', '`date`', 133, EWR_DATATYPE_DATE, 7);
		$this->date->FldDefaultErrMsg = str_replace("%s", "/", $ReportLanguage->Phrase("IncorrectDateDMY"));
		$this->fields['date'] = &$this->date;
		$this->date->DateFilter = "";
		$this->date->SqlSelect = "";
		$this->date->SqlOrderBy = "";

		// item_type
		$this->item_type = new crField('customer_inventory', 'customer_inventory', 'x_item_type', 'item_type', '`item_type`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['item_type'] = &$this->item_type;
		$this->item_type->DateFilter = "";
		$this->item_type->SqlSelect = "";
		$this->item_type->SqlOrderBy = "";

		// item
		$this->item = new crField('customer_inventory', 'customer_inventory', 'x_item', 'item', '`item`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['item'] = &$this->item;
		$this->item->DateFilter = "";
		$this->item->SqlSelect = "";
		$this->item->SqlOrderBy = "";

		// formula
		$this->formula = new crField('customer_inventory', 'customer_inventory', 'x_formula', 'formula', '`formula`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['formula'] = &$this->formula;
		$this->formula->DateFilter = "";
		$this->formula->SqlSelect = "";
		$this->formula->SqlOrderBy = "";

		// power
		$this->power = new crField('customer_inventory', 'customer_inventory', 'x_power', 'power', '`power`', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['power'] = &$this->power;
		$this->power->DateFilter = "";
		$this->power->SqlSelect = "";
		$this->power->SqlOrderBy = "";

		// quantity
		$this->quantity = new crField('customer_inventory', 'customer_inventory', 'x_quantity', 'quantity', '`quantity`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->quantity->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['quantity'] = &$this->quantity;
		$this->quantity->DateFilter = "";
		$this->quantity->SqlSelect = "";
		$this->quantity->SqlOrderBy = "";

		// price
		$this->price = new crField('customer_inventory', 'customer_inventory', 'x_price', 'price', '`price`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->price->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['price'] = &$this->price;
		$this->price->DateFilter = "";
		$this->price->SqlSelect = "";
		$this->price->SqlOrderBy = "";

		// total
		$this->total = new crField('customer_inventory', 'customer_inventory', 'x_total', 'total', '`total`', 3, EWR_DATATYPE_NUMBER, -1);
		$this->total->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['total'] = &$this->total;
		$this->total->DateFilter = "";
		$this->total->SqlSelect = "";
		$this->total->SqlOrderBy = "";
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
		return "`customer_inventory`";
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
		return "SELECT MAX(`reciept_no`) AS `max_reciept_no` FROM " . $this->SqlFrom();
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
