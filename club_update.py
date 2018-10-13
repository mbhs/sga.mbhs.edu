xxyimport openpyxl
wb = openpyxl.load_workbook('C:\\Users\\Misha\\Downloads\\Clubs 2015-2016.xlsx')
sheet = wb.get_sheet_by_name('Sheet1')
x = 1;
names = []
sponsors = []
emails = []
sites = []
hold = ""
while(sheet['A'+str(x)].value):
    names.append(sheet['A'+str(x)].value)
    sponsors.append(sheet['B'+str(x)].value)
    emails.append(sheet['C'+str(x)].value)
    sites.append(sheet['D'+str(x)].value)
    x += 1
for y in range(0, x - 1):
    hold += "<tr>\n\t<td>" + str(names[y]) + "</td>\n\t<td><sponsor>" + str(sponsors[y]) + "</td>\n\t<td><a href=\"mailto:" + str(emails[y]) + "\">" + str(emails[y]) + "</a></td>\n\t<td><a href = \"http://" + str(sites[y]) + "\">" + str(sites[y]) + "</a></td>\n</tr>"
clubs = open('clubs.html', 'r')
prev = clubs.read()
clubs.close()

current = prev[:prev.find("<tbody>")+7] + hold + prev[prev.find("</tbody>"):]

clubs = open('clubs.html', 'w')
clubs.write(current)
clubs.close()
