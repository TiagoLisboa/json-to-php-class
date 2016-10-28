from lib import gen_dic as gen
from lib import vo_parser as vo

FILE_SOURCE = 'source/objects.txt'

objects = open (FILE_SOURCE, 'r').read()
file = gen.gen_dic(objects)

vo.gen_vo (file, "s")