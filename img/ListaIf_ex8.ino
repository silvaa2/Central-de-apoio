float MinhaNota = 11;
void setup() {
  Serial.begin(9600);
  if((MinhaNota < 0) || (MinhaNota > 10))
    {
    Serial.print("Nota invalida");
    if(MinhaNota < 0) 
      {
      Serial.print(". Nao existe nota negativa");    
      }
    if(MinhaNota > 10)
      {
      Serial.print(". Mto nerd pra tirar mais que 10!");
      }
    }
  else
    {
    if(MinhaNota >= 6)
      {
      Serial.print("Aluno aprovado");
      }
    if((MinhaNota >=2.5) && (MinhaNota < 6))
      {
      Serial.print("Aluno em exame. Vai estudar!!!");
      }
    if(MinhaNota < 2.5)
      {
      Serial.print("Aluno reprovado, nos vemos ano que vem.");
      }
    }



}

void loop() {
  // put your main code here, to run repeatedly:

}
