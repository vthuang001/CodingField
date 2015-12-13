using UnityEngine;
using System.Collections;

public class Catalog : MonoBehaviour {
	
	public GameObject CatalogObject;
    public GameObject GiftObject;
    public GameObject ExitObject;
    public GameObject UpArrow;
    public GameObject DownArrow;

    // Use this for initialization
    void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
        if ( CatalogObject.activeSelf == true )
        {
            CatalogObject.SetActive(false);
            GiftObject.SetActive(true);
            ExitObject.SetActive(true);
            UpArrow.SetActive(false);
            DownArrow.SetActive(true);
        }
        else
        {
            CatalogObject.SetActive(true);
            GiftObject.SetActive(false);
            ExitObject.SetActive(false);
            UpArrow.SetActive(true);
            DownArrow.SetActive(false);
        }
	}
}