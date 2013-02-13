
// whitespace characters
var whitespace = " \t\n\r";

// Check whether string s is empty.
function isEmpty(s)
{
	return ((s == null) || (s.length == 0))
}

// Returns true if string s is empty or
// whitespace characters only.
function isWhitespace (s)
{   var i;
    if (isEmpty(s)) return true;
    for (i = 0; i < s.length; i++)
    {
		var c = s.charAt(i);
		if (whitespace.indexOf(c) == -1) return false;
    }
    return true;
}

/****************************************************************/
function isEmail (mail)
{
	var er = new RegExp(/^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{1,})*\.([a-z]{2,}){1}$/);
	if(er.test(mail)){return true;}
	return false;
}

function isLettersAndNumbers(str)
{
	var reg = /[^a-zA-Z0-9]/ig;
	if(reg.test(str)){return true;}
	return false;
}

function isCustomChars(objField)
{
	var reg = /[^a-zA-Z0-9._-]/ig;
	if(reg.test(str)){return true;}
	return false;
}

function isNumber(str)
{
	if (isWhitespace(str)) return false;

	for (var i = 0; i < str.length; i++){
		if (str.charAt(i) < '0' || str.charAt(i) > '9') {
			return false;
		}
	}
	return true;
}


/****************************************************************/
// Returns true if the string passed in is a valid money
//  (no alpha characters except a decimal place),
//   else it displays an error message
function isMoney(str)
{
	var er = new RegExp(/^[0-9.]+(\,[0-9]{1,2})?$/);
	if(er.test(str)){return true;}
    return false;
}


/****************************************************************/

// This function determines if the string passed in is a valid
// Portugal zip code.  It accepts either ####-###.  If the
// string is valid, it returns true, else false.
function isZipcode(strZip)
{
	var s = new String(strZip);
	if (s.length != 8){return false};
	for (var i=0; i < s.length; i++){
		if ((s.charAt(i) < '0' || s.charAt(s) > '9') && s.charAt(i) != '-'){
			return false;
		}
	}
	return true;
}

function forceLength(strField, nLength)
{
	if (strField.length > nLength) {return false;}
	return true;
}


////////////////////////////////////////////////////////////////////////////////////////
// DATE VALIDATION

// Declaring valid date character, minimum year and maximum year
var dtCh= "-";
var minYear=1900;
var maxYear=2100;


function stripCharsInBag(s, bag){
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++){
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary (year){
	// February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}

function DaysArray(n) {
	for (var i = 1; i <= n; i++) {
		this[i] = 31
		if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
		if (i==2) {this[i] = 29}
   }
   return this
}

function isDate(dtStr){
	var daysInMonth = DaysArray(12)
	var pos1=dtStr.indexOf(dtCh)
	var pos2=dtStr.indexOf(dtCh,pos1+1)
	var strYear=dtStr.substring(0,pos1)
	var strMonth=dtStr.substring(pos1+1,pos2)
	var strDay=dtStr.substring(pos2+1)
	strYr=strYear

	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
	for (var i = 1; i <= 3; i++) {
		if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
	}
	month=parseInt(strMonth)
	day=parseInt(strDay)
	year=parseInt(strYr)
	if (pos1==-1 || pos2==-1){
		return -1;
	}
	if (strMonth.length<1 || month<1 || month>12){
		return -2;
	}
	if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
		return -3;
	}
	if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
		return -4;
	}
	if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isNumber(stripCharsInBag(dtStr, dtCh))==false){
		return -5;
	}
	return 0
}

function isHour(hourStr)
{
	var pos = hourStr.indexOf(":");
	if(pos != 2 || hourStr.length < 5){return -1;}
	if(hourStr.charAt(0) < "0" ||  hourStr.charAt(0) > "2"){return -2;}
	if(hourStr.charAt(1) < "0" ||  hourStr.charAt(1) > "9"){return -3;}
	if(hourStr.charAt(0) == 2 && hourStr.charAt(1) > "3"){return -4;}
	if(hourStr.charAt(3) < "0" ||  hourStr.charAt(3) > "5"){return -5;}
	if(hourStr.charAt(4) < "0" ||  hourStr.charAt(4) > "9"){return -6;}
	return 0;
}

function diferenca_data(data1,data2)
{
	//-1 => data1 < data2
	//0 => data1 == data2
	//1 => data1 > data2
	var data1_temp = data1.split("-");
	var data2_temp = data2.split("-");

	if(data1_temp[0]==data2_temp[0] && data1_temp[1]==data2_temp[1] && data1_temp[2]==data2_temp[2]){
		return 0;
	}else if(data1_temp[0] > data2_temp[0]){
		return 1;
	}else if(data1_temp[0] == data2_temp[0] && data1_temp[1] > data2_temp[1]){
		return 1;
	}else if(data1_temp[0] == data2_temp[0] && data1_temp[1] == data2_temp[1] && data1_temp[2] > data2_temp[2]){
		return 1;
	}
	return -1;
}

function diferenca_hora(hora1,hora2)
{
	//-1 => hora1 < hora2
	//0 => hora1 == hora2
	//1 => hora1 > hora2
	var hora1_temp = hora1.split(":");
	var hora2_temp = hora2.split(":");

	if(parseInt(hora1_temp[0])==parseInt(hora2_temp[0]) && parseInt(hora1_temp[1])==parseInt(hora2_temp[1]) ){
		return 0;
	}else if(parseInt(hora1_temp[0])<parseInt(hora2_temp[0])){
		return -1
	}else if(parseInt(hora1_temp[0])==parseInt(hora2_temp[0]) && parseInt(hora1_temp[1])<parseInt(hora2_temp[1])){
		return -1
	}
	return 1;
}