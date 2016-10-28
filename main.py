from lib import gen_dic as gen
from lib import vo_parser as vo
from lib import dao_parser as dao

FILE_SOURCE = 'source/objects.txt'

objects = open (FILE_SOURCE, 'r').read()
file = gen.gen_dic(objects)

mod = input("Qual o modo? (s: single; m: multi)")
folder = input("Onde salvar?")

vo.gen_vo (file, mod, folder)
dao.gen_dao(file, mod, folder)