import sqlalchemy as db
import pymysql
engine = db.create_engine("mysql+pymysql://root:@localhost:3306/ipres")
connection = engine.connect()
metadata = db.MetaData()
conn = engine.connect()
employeur = db.Table('employeur', metadata, autoload=True, autoload_with=engine)
donnees = db.Table('donnees', metadata, autoload=True, autoload_with=engine)
j = employeur.join(donnees, employeur.c.id == donnees.c.idEmployeur)
result = conn.execute(donnees.select())
for rows in result:
    if rows[2]<=0 and rows[4]==0:
        stm = donnees.update().where(donnees.c.id == rows[0]).values(anomalie=1)
        conn.execute(stm)
    elif rows[2]<=0 and rows[4]>0:
        stm = donnees.update().where(donnees.c.id == rows[0]).values(anomalie=4)
        conn.execute(stm)
    elif rows[2]>0:
        if rows[4]==0:
            stm=donnees.update().where(donnees.c.id == rows[0]).values(anomalie=2)
            conn.execute(stm)
        elif rows[2] != rows[4]:
            stm = donnees.update().where(donnees.c.id == rows[0]).values(anomalie=3)  
            conn.execute(stm)

