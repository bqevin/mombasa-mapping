import xlrd
from xlrd.sheet import ctype_text 

book = xlrd.open_workbook("nat_ground_contacts.xls")
print "The number of worksheets is", book.nsheets
print "Worksheet name(s):", book.sheet_names()
#sheet = book.sheets()[0] #book.sheets() returns a list of sheet objects... alternatively...
#sheet = book.sheet_by_name("REFINED")

#Get sheet name
sheet_names = book.sheet_names()
xl_sheet = book.sheet_by_name("REFINED")
row = xl_sheet.row(0)  # 1st row
# Print 1st row values and types
# 

print('(Column #) type:value')
for idx, cell_obj in enumerate(row):
    cell_type_str = ctype_text.get(cell_obj.ctype, 'unknown type')
    print('(%s) %s %s' % (idx, cell_type_str, cell_obj.value))

# Print all values, iterating through rows and columns
#
num_cols = xl_sheet.ncols   # Number of columns
for row_idx in range(0, xl_sheet.nrows):    # Iterate through rows
    print ('-'*40)
    print ('Row: %s' % row_idx)   # Print row number
    for col_idx in range(0, num_cols):  # Iterate through columns
        cell_obj = xl_sheet.cell(row_idx, col_idx)  # Get cell object by row, col
        print ('Column: [%s] cell_obj: [%s]' % (col_idx, cell_obj))





