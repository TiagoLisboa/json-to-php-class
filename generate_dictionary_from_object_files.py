FILE_SOURCE = 'objects.txt'

objects = open (FILE_SOURCE, 'r').read()

#tel = {'jack': 4098, 'sape': 4139}

def generate_dictionary(file):
    
    out = {}
    temp_key = ''
    temp_value = []

    file = file.replace(" ", "")
    file = file.split(';\n')
    #file = file.split(':');
    for i in range(0,len(file)):
        #if (i%2 == 0):
        #print (file[i])
        temp_line = file[i].split(':')
        temp_key = temp_line[0]
        temp_value = temp_line[1].split(',')
        #print (temp_value)
        out[temp_key] = temp_value
        
    return out

print(generate_dictionary(objects))
