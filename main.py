import generate_dictionary_from_object_files as generator
import voParser as vo


FILE_SOURCE = 'objects.txt'

objects = open (FILE_SOURCE, 'r').read()

file = generator.generate_dictionary (objects)

# print(file)

vo.gerarVO (file, "m")