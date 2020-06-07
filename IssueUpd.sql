update mmm_stock , issue 
set mmm_stock.ISSUE_YR3 = issue.TotalIss
where mmm_stock.PL_NO = issue.PL_No and mmm_stock.nlu = issue.Unit
and mmm_stock.wd = issue.Ward and mmm_stock.CAT = issue.category and issue.IssueYr = '1718';

