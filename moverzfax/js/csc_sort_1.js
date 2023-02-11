
// Country select
function get_country_1() {
    var counrty_1 = $('#country_1');
    $.ajax({
        type: "POST",
        url: "../model/country.php",
        success: function (result) {
            counrty_1.html(result);
        }
    });
}

function get_state_1() {
    var state_1 = $('#state_1');
    var value = $('#country_1').val();
    $.ajax({
        type: "POST",
        url: "../model/state.php",
        data: {
            country_id: value
        },
        success: function (result) {
            state_1.html(result);
        }
    });
}

function get_city_1() {
    var city_1 = $('#city_1');
    var value = $('#state_1').val();
    $.ajax({
        type: "POST",
        url: "../model/city.php",
        data: {
            state_code: value
        },
        success: function (result) {
            city_1.html(result);
        }
    });
}

setTimeout(get_country_1, 100);
setTimeout(get_state_1, 200);
setTimeout(get_city_1, 300);

function reset_csc() {
    setTimeout(get_country_1, 100);
    setTimeout(get_state_1, 200);
    setTimeout(get_city_1, 300);
}

function setStateLink(){
    var stateCode = $('#state_1').val();
    console.log("yes dog" + state_links[stateCode]);
    return state_links[stateCode];
}

var state_links = {
    "AL": "https://arc-sos.state.al.us/CGI/CORPNAME.MBR/INPUT",
    "AK": "https://www.commerce.alaska.gov/cbp/main/search/entities",
    "AZ": "https://ecorp.azcc.gov/EntitySearch/Index",
    "AR": "https://www.sos.arkansas.gov/corps/search_all.php",
    "CA": "https://bizfileonline.sos.ca.gov/search/business",
    "CO": "https://www.sos.state.co.us/biz/BusinessEntityCriteriaExt.do?resetTransTyp=Y",
    "CT": "https://service.ct.gov/business/s/onlinebusinesssearch",
    "DE": "https://icis.corp.delaware.gov/Ecorp/EntitySearch/NameSearch.aspx",
    "DC": "https://corponline.dcra.dc.gov/Home.aspx",
    "FL": "http://search.sunbiz.org/Inquiry/CorporationSearch/ByName",
    "GA": "https://ecorp.sos.ga.gov/BusinessSearch",
    "HI": "https://hbe.ehawaii.gov/documents/search.html",
    "ID": "https://sosbiz.idaho.gov/search/business",
    "IL": "https://apps.ilsos.gov/corporatellc/",
    "IN": "https://bsd.sos.in.gov/publicbusinesssearch",
    "IA": "https://sos.iowa.gov/search/business/search.aspx",
    "KS": "https://www.kansas.gov/bess/flow/main?execution=e1s1",
    "KY": "https://web.sos.ky.gov/ftsearch/",
    "LA": "https://coraweb.sos.la.gov/CommercialSearch/CommercialSearch.aspx",
    "ME": "https://icrs.informe.org/nei-sos-icrs/ICRS?MainPage=x",
    "MD": "https://egov.maryland.gov/BusinessExpress/EntitySearch",
    "MA": "https://corp.sec.state.ma.us/corpweb/CorpSearch/CorpSearch.aspx",
    "MI": "https://cofs.lara.state.mi.us/SearchApi/Search/Search",
    "MN": "https://mblsportal.sos.state.mn.us/Business/Search",
    "MS": "https://corp.sos.ms.gov/corp/portal/c/page/corpBusinessIdSearch/portal.aspx?#clear=1",
    "MO": "https://bsd.sos.mo.gov/BusinessEntity/BESearch.aspx?SearchType=0",
    "MT": "https://biz.sosmt.gov/search/business",
    "NE": "https://www.nebraska.gov/sos/corp/corpsearch.cgi?nav=search",
    "NV": "https://esos.nv.gov/EntitySearch/OnlineEntitySearch",
    "NH": "https://quickstart.sos.nh.gov/online/BusinessInquire",
    "NJ": "https://www.njportal.com/DOR/BusinessNameSearch/Search/BusinessName",
    "NM": "https://portal.sos.state.nm.us/BFS/online/CorporationBusinessSearch",
    "NY": "https://apps.dos.ny.gov/publicInquiry/EntityDisplay",
    "NC": "https://www.sosnc.gov/search/index/corp",
    "ND": "https://firststop.sos.nd.gov/search/business",
    "OH": "https://businesssearch.ohiosos.gov/",
    "OK": "https://www.sos.ok.gov/corp/corpinquiryfind.aspx",
    "OR": "http://egov.sos.state.or.us/br/pkg_web_name_srch_inq.login",
    "PA": "https://file.dos.pa.gov/search/business",
    "PR": "https://prcorpfiling.f1hst.com/CorporationSearch.aspx",
    "RI": "http://business.sos.ri.gov/CorpWeb/CorpSearch/CorpSearch.aspx",
    "SC": "https://businessfilings.sc.gov/BusinessFiling/Entity/Search",
    "SD": "https://sosenterprise.sd.gov/BusinessServices/Business/FilingSearch.aspx",
    "TN": "https://tnbear.tn.gov/Ecommerce/FilingSearch.aspx",
    "TX": "https://mycpa.cpa.state.tx.us/coa/",
    "UT": "https://secure.utah.gov/bes/",
    "VT": "https://bizfilings.vermont.gov/online/BusinessInquire/",
    "VA": "https://cis.scc.virginia.gov/EntitySearch/Index",
    "WA": "https://ccfs.sos.wa.gov/#/AdvancedSearch",
    "WV": "https://apps.wv.gov/SOS/BusinessEntitySearch/",
    "WI": "https://www.wdfi.org/apps/CorpSearch/Search.aspx",
    "WY": "https://wyobiz.wyo.gov/Business/FilingSearch.aspx"
}