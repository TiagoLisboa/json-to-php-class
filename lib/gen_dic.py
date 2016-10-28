def gen_dic(file):
    
    out = {}
    temp_key = ''
    temp_value = []

    file = file.replace(" ", "")
    file = file.replace("\n", "")
    file = file.split(';')
    #file = file.split(':');
    for i in range(0,len(file)):
        temp_line = file[i].split(':')

        if len(temp_line) == 2:
            temp_key = temp_line[0]
            temp_value = temp_line[1].split(',')
            out[temp_key] = temp_value
        
    return out
